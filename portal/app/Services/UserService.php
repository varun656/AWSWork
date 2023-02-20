<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserService
{
    public function getAll($data)
    {
        if (isset($data['type'])) {
            $users = User::where('type', '=', $data['type'])
                ->orderBy('name', 'ASC')->get();
        } else {
            $users = User::orderBy('name', 'ASC')->get();
        }

        return UserResource::collection($users);
    }

    public function getOne($data)
    {
        $id = $data->id;
        $user = User::where('id', $id)->get();
        return UserResource::collection($user);
    }

    public function create($data)
    {
        $User = User::create($data);
        return new UserResource($User);
    }

    public function update($data)
    {
        $id = $data['id'];
        $user = User::find($id);

        if (isset($data['name'])) {
            $name = $data['name'];
            $user->name = $name;
        }
        if (isset($data['status'])) {
            $status = ($data['status']);
            $user->status = $status;
        }
        if (isset($data['email'])) {
            $email = ($data['email']);
            $user->email = $email;
        }
        if (isset($data['password'])) {
            $password = ($data['password']);
            $user->password = bcrypt($password);
        }
        if (isset($data['type'])) {
            $type = ($data['type']);
            $user->type = bcrypt($type);
        }

        $user->save();

        // $User = User::update($data);
        return new UserResource($user);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $User = User::find($data);
        $User->delete();
    }

}
