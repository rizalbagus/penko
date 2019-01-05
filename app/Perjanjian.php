<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjanjian extends Model
{
    protected $guarded = ['id'];
    /*
     * Validations
     */
    public static function rules($update = false, $id = null)
    {
        $rules = [
            'id_perjanjian'    => ['required', Rule::unique('perjanjian')->ignore($id, 'id')],
            'tgl_janji'         => 'required',
            'id_user_client'         => 'required',
            'waktu'        => 'required',
            'id_user_konselor'       => 'required'
            ];
        if ($update) {
            return $rules;
        }
        return array_merge($rules, [
            'id_perjanjian'         => 'required|unique:perjanjian,id_perjanjian',
        ]);

}
