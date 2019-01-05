<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
        protected $guarded = ['id'];
    /*
     * Validations
     */
    public static function rules($update = false, $id = null)
    {
        $rules = [
            'id_forum'    => ['required', Rule::unique('forum')->ignore($id, 'id')],
            'judul_forum'         => 'required',
            'deskripsi'         => 'required',
            'id_user_client_forum'        => 'required',
            'id_user_konselor_forum'       => 'required',
            'status'  => 'required',
            'longitude'       => 'required',
            'latitude'  => 'required'
            ];
        if ($update) {
            return $rules;
        }
        return array_merge($rules, [
            'id_forum'         => 'required|unique:forum,id_forum',
        ]);

}
