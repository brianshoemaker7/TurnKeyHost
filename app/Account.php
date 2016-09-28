<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    
   	/**
     * The storage format of the model's date columns.
     *
     * @var string
     */
   	protected $primaryKey = 'id';
    protected $table = 'accounts';
    protected $fillable = ['name', 'email', 'password', 'domain', 'package'];

};
