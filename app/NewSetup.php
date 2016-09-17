<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewSetup extends Model
{
    
   	/**
     * The storage format of the model's date columns.
     *
     * @var string
     */
   protected $table = 'new_setups';
    protected $fillable = ['name', 'email', 'password', 'domain', 'street', 'city', 'state', 'zipcode',
    ];

};
