<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $guarded = ['id'];
    /*
     * Validations
     */
    public static function rules($update = false, $id = null)
    {
        $rules = [
            'id_forum_comment'         => 'required',
            'id_user_comment'         => 'required',
            'komentar'        => 'required'
            ];
        if ($update) {
            return $rules;
        }
        

}
