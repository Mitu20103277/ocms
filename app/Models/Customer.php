<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded= [];


    //accessor

    public function getFullNameAttribute(){

        return $this->first_name.' '. $this->last_name;

    }
    public function setFirstNameAttribute($value)
    {

        return $this->attributes['first_name']=ucfirst($value);

    }

    public function setEmailAttribute($value)
    {

        return $this->attributes['email']=strtolower($value);

    }
}
