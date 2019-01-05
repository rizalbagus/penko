<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ForumItem extends JsonResource
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
            'id_forum' => 
            $this->id_forum,
            'judul_forum' => 
            $this->judul_forum,
            'deskripsi' => 
            $this->deskripsi,
            'id_user_client' => 
            $this->id_user_client,
            'id_user_konselor' => 
            $this->id_user_konselor,
            'status' => 
            $this->status
        ];
    }
}
