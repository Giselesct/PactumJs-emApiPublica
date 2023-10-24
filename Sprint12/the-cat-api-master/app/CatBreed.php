<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatBreed extends Model
{
    /**
     * The Cat Breed table name
     *
     * @var string
     */
    protected $table = 'cat_breed';

    /**
     * The table primary key
     *
     * @var string
     */
    protected $primaryKey = "id";

    /**
     * Define that the primary key is not auto increment
     *
     * @var bool
     */
    protected $increment = false;

    /**
     * Allows all fields
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Customize the fields' casts
     *
     * @var array
     */
    protected $casts = [
        'weight' => 'array',
        'id' => 'string'
    ];
}
