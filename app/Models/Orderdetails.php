<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function food(){
        return $this->hasMany(Food::class, "food_id");
    }
}
