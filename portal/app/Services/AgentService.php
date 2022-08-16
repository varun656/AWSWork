<?php

namespace App\Services;

use App\Http\Resources\AgentResource;
use App\Models\Agent;

class AgentService
{
    public function getAll()
    {
        return AgentResource::collection(Agent::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $agent = Agent::create($data);
        return new AgentResource($agent);
    }

    public function update($data)
    {
        $id = $data['id'];
        $agent = Agent::find($id);

        if (isset($data['name'])) {
            $agent->name = $data['name'];
        }

        if (isset($data['country_id'])) {
            $agent->country_id = $data['country_id'];
        }

        if (isset($data['state_id'])) {
            $agent->state_id = $data['state_id'];
        }

        if (isset($data['agency_id'])) {
            $agent->agency_id = $data['agency_id'];
            $agent->agency_name = null;
        }

        if (isset($data['agency_name'])) {
            $agent->agency_id = null;
            $agent->agency_name = $data['agency_name'];
        }

        if (isset($data['city_id'])) {
            $agent->city_id = $data['city_id'];
        }

        if (isset($data['address'])) {
            $agent->address = $data['address'];
        }

        if (isset($data['mobile'])) {
            $agent->mobile = $data['mobile'];
        }

        if (isset($data['landline'])) {
            $agent->landline = $data['landline'];
        }

        $agent->save();

        return new AgentResource($agent);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $agent = Agent::find($data);
        $agent->delete();
    }

    public function agentByUserId($data)
    {
        $userId = $data['user_id'];
        $agent = Agent::where('user_id', $userId)->first();
        return new AgentResource($agent);
    }

}
