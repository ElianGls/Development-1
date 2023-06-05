<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Campus
 *
 * @property $id
 * @property $name_campuses
 * @property $address_campuses
 * @property $phone_campuses
 * @property $email_campuses
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Campus extends Model
{
    
    static $rules = [
		'name_campuses' => 'required',
		'address_campuses' => 'required',
		'phone_campuses' => 'required',
		'email_campuses' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_campuses','address_campuses','phone_campuses','email_campuses'];



}
