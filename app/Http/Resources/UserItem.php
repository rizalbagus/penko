<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserItem extends JsonResource
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
            'id_user' => $this->id_user,
            'username' => $this->username,
            'password' => $this->password,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'status' => $this->status,
            'longtude' => $this->longtude,
            'latitude' => $this->latitude
        ];
    }
}
