<?php

namespace App\Services;

use App\Http\Resources\VisitorResource;
use App\Models\Visitor;

class VisitorService
{
    public function getAll()
    {
        return VisitorResource::collection(Visitor::orderBy('name', 'ASC')->get());
    }

    public function create($data)
    {
        $visitor = Visitor::create($data);
        return new VisitorResource($visitor);
    }

    public function update($data)
    {
        $id = $data['id'];
        $visitor = Visitor::find($id);

        if (isset($data['name'])) {
            $visitor->name = $data['name'];
        }

        if (isset($data['country_id'])) {
            $visitor->country_id = $data['country_id'];
        }

        if (isset($data['state_id'])) {
            $visitor->state_id = $data['state_id'];
        }

        if (isset($data['city_id'])) {
            $visitor->city_id = $data['city_id'];
        }

        if (isset($data['address'])) {
            $visitor->address = $data['address'];
        }

        if (isset($data['mobile'])) {
            $visitor->mobile = $data['mobile'];
        }

        if (isset($data['landline'])) {
            $visitor->landline = $data['landline'];
        }

        $visitor->save();

        // $visitor = Visitor::update($data);
        return new VisitorResource($visitor);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $visitor = Visitor::find($data);
        $visitor->delete();
    }

    public function visitorByUserId($data)
    {
        $userId = $data['user_id'];
        $visitor = Visitor::where('user_id', $userId)->first();
        return new VisitorResource($visitor);
    }

}
