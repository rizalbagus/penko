<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerjanjianItem extends JsonResource
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
            'id_perjanjian' => 
            $this->id_perjanjian,
            'tgl_janji' => 
            $this->tgl_janji,
            'id_user_client' => 
            $this->id_user_client,
            'id_user_konselor' => 
            $this->id_user_konselor
        ];
    }
}
