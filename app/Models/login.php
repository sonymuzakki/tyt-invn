<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    public function users(){
        return $this->hasOne(users::class,'idu','idu');
    }
}