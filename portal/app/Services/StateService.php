<?php

namespace App\Services;

use App\Http\Resources\StateResource;
use App\Models\State;

class StateService
{
    public function getAll()
    {
        $states = State::where('country_id', 233)->orderBy('name', 'ASC')->get();
        return StateResource::collection($states);
    }

    public function create($data)
    {
        $state = State::create($data);
        return new StateResource($state);
    }

    public function update($data)
    {
        $name = $data['name'];

        $id = $data['id'];
        $state = State::find($id);

        $state->name = $name;

        $state->save();

        // $state = State::update($data);
        return new StateResource($state);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $state = State::find($data);
        $state->delete();
    }

    public function statesByCountryId($data)
    {

        if (gettype($data['id']) == 'integer') {

            $id = $data['id'];
            $states = State::where('country_id', $id)->orderBy('name', 'ASC')->get();
            return StateResource::collection($states);

        } else {
            $states = State::orderBy('name', 'ASC')->get();
            return StateResource::collection($states);
        }

    }

}
