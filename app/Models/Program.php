<?php

namespace App\Models; //App\Models

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //use HasFactory;
    public function edulevel(){
        return $this->belongsTo('App\Models\Edulevel');
    }
}
