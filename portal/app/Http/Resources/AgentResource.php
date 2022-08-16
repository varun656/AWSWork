<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'mobile' => $this->mobile,
            'landline' => $this->landline,
            'user' => $this->user,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'homepage' => $this->homepage,
            'logo' => $this->logo,
        ];
    }
}
