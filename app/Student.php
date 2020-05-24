<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $talbe='students';

    public function admin() {
	    return $this->belongsTo('App\Admin');
    }
}
