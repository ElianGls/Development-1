<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonalInformation
 *
 * @property $id
 * @property $user_id
 * @property $gender
 * @property $birthday
 * @property $curp
 * @property $civil_status
 * @property $social_security
 * @property $country
 * @property $city
 * @property $neighborhood
 * @property $address
 * @property $zip
 * @property $phone
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonalInformation extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'gender' => 'required',
		'birthday' => 'required',
		'curp' => 'required',
		'civil_status' => 'required',
		'social_security' => 'required',
		'country' => 'required',
		'city' => 'required',
		'neighborhood' => 'required',
		'address' => 'required',
		'zip' => 'required',
		'phone' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','gender','birthday','curp','civil_status','social_security','country','city','neighborhood','address','zip','phone','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
