<?php

namespace AvoRed\Framework\Api\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserAddressResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,     
            'user_id' => $this->user_id,     
            'first_name' => $this->first_name,     
            'last_name' => $this->last_name,     
            'address1' => $this->address1,     
            'address2' => $this->address2,     
            'postcode' => $this->postcode,     
            'city' => $this->city,     
            'state' => $this->state,     
            'country_name' => $this->country->name,     
            'phone' => $this->phone,     
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    /**
     * Added a Status Success with Response
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function with($request){

        return [
          'status'=>'success'
        ];
    }
}