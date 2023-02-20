<?php

namespace App\Services;

use App\Http\Resources\CountryResource;
use App\Models\Country;

class CountryService
{
    public function getAll()
    {
        return CountryResource::collection(Country::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $country = Country::create($data);
        return new CountryResource($country);
    }

    public function update($data)
    {
        $name = $data['name'];

        $id = $data['id'];
        $country = Country::find($id);

        $country->name = $name;

        $country->save();

        // $country = Country::update($data);
        return new CountryResource($country);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $country = Country::find($data);
        $country->delete();
    }

}
