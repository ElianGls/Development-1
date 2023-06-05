<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 *
 * @property $id
 * @property $name_departments
 * @property $id_campuses
 * @property $description_departments
 * @property $email_departments
 * @property $created_at
 * @property $updated_at
 *
 * @property Campus $campus
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Department extends Model
{
    
    static $rules = [
		'name_departments' => 'required',
		'id_campuses' => 'required',
		'description_departments' => 'required',
		'email_departments' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_departments','id_campuses','description_departments','email_departments'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campus()
    {
        return $this->hasOne('App\Models\Campus', 'id', 'id_campuses');
    }
    

}
