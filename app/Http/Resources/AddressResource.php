<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'country' => $this->country,
            'city' => $this->city,
            'postcode' => $this->postcode,
            'streetName' => $this->streetName,
            'buildingNumber' => $this->buildingNumber,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}
