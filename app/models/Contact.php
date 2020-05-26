<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'department_id',
        'city',
        'country',
        'job_title'       
    ];

    public function Department(){


       // return $this->belongsTo('App\models\Department');
        return $this->belongsTo(Department::class);


    }




}
