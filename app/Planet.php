<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model {

    // The db table to use
    protected $table = 'planets';
    // The columns that we can mass assign
    protected $fillable = ['name'];
}
