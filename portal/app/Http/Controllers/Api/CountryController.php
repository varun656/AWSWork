<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CountryRequest $request, CountryService $service)
    {
        $result = $service->getAll();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CountryRequest $request, CountryService $service)
    {
        // echo $request->input();
        // echo "<pre>";
        // print_r($request);
        // echo "</pre>";
        // exit();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request, CountryService $service)
    {
        //
        return $service->create($request->validated());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $Country)
    {
        // echo "i am in country controller show method";exit();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $Country)
    {
        echo "i am in edit";exit();
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, CountryService $service)
    {
        return $service->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $Country
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryRequest $request, $id, CountryService $service)
    {
        return $service->delete($id);
    }
}
