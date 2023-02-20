<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public $http;
    public function __construct()
    {
        $this->http = new Client();
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            try {
                $response = $this->http->post('http://xpat2.test/oauth/token', [
                    'form_params' => [
                        'grant_type' => 'password',
                        'client_id' => config('services.passport.client_id'),
                        'client_secret' => config('services.passport.client_secret'),
                        'username' => $request->email,
                        'password' => $request->password,
                    ],
                ]);

                $apiRequest = json_decode($response->getBody());
                $access_token = $apiRequest->access_token;
                if ($access_token) {
                    $user = User::where('email', $request->email)->first();

                    $user->access_token = $access_token;
                    $user->permissions = Auth::user()->permissions;

                    return response()->json($user, 200);
                }

                // return response()->json($response, 200);
                // return $response->getBody();

            } catch (\GuzzleHttp\Exception\BadResponseException $e) {

                if ($e->getCode() == 400) {
                    return response()->json('Invalid Request. Please Enter a Username or a Password', $e->getCode());
                } else if ($e->getCode() == 401) {
                    return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
                }
                return response()->json('Something went wrong on the server', $e->getCode());

            }

        } else {
            return response()->json([
                'errors' => ['password' => array("Invalid Password")],
            ], 422);
        }

    }

    public function register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:255',
        ]);

        $user = new User();
        $user->name = ucfirst($request->name);
        $user->email = $request->email;
        $user->password = bcrypt('askjeewanjee');
        $user->type = strtolower($request->type);
        $user->status = 'P';
        $user->save();

        try {

            $response = $this->http->post('http://xpat2.test/oauth/token', [

                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->email,
                    'password' => $request->password,
                ],
            ]);

            $apiRequest = json_decode($response->getBody());
            $access_token = $apiRequest->access_token;

            if ($access_token) {
                $user = User::where('email', $request->email)->first();

                $user->access_token = $access_token;

                return response()->json($user, 200);

            }

            return response()->json($user, 200);

        } catch (\GuzzleHttp\Exception\BadResponseException $e) {

            if ($e->getCode() == 400) {
                return response()->json('Invalid Request. Please Enter a Username or a Password', $e->getCode());
            } else if ($e->getCode() == 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server', $e->getCode());

        }

    }

    public function logout(Request $request)
    {

        $userId = $request->id;
        Auth::logout();

        DB::table('oauth_access_tokens')->where('user_id', '=', $userId)->delete();

        return response()->json(['data' => 'Logged out successfully'], 200);

    }

}
