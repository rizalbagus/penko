
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
class User extends Model
{
    protected $guarded = ['id'];
    /*
     * Validations
     */
    public static function rules($update = false, $id = null)
    {
        $rules = [
            'id_user'    => ['required', Rule::unique('user')->ignore($id, 'id')],
            'username'         => 'required',
            'password'         => 'required',
            'nama'        => 'required',
            'alamat'       => 'required',
            'status'  => ['required', Rule::in(['male', 'female'])],
            'longitude'       => 'required',
            'latitude'  => 'required'
            ];
        if ($update) {
            return $rules;
        }
        return array_merge($rules, [
            'id_user'         => 'required|unique:user,id_user',
        ]);
    }
}