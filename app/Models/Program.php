<?php

namespace App\Models; //App\Models

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //protected $fillable = ['name', 'edulevel_id'];
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];
    
    //use HasFactory;
    public function edulevel(){
        return $this->belongsTo('App\Models\Edulevel');
    }
}

