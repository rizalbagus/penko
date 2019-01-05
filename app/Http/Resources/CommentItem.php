<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentItem extends JsonResource
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
            'id_forum_comment' => 
            $this->id_forum_comment,
            'id_user_comment' => 
            $this->id_user_comment,
            'komentar' => 
            $this->komentar
        ];
    }
}
