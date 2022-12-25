<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country_name','country_code'];


    public function cities(){
        return $this->hasMany('App\Models\City','country_id','id');
    }
}
