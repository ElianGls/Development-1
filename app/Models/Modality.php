<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modality
 *
 * @property $id
 * @property $name_modalities
 * @property $description_modalities
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modality extends Model
{
    
    static $rules = [
		'name_modalities' => 'required',
		'description_modalities' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_modalities','description_modalities'];



}
