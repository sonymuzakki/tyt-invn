<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users_itc';
    protected $guarded;
    protected $primaryKey = 'idu' ;

    public function inventory(){
        return $this->belongsTo(inventory::class);
    }

    public function laporan_request(){
        return $this->belongsTo(laporan_request::class);
    }
    public function login(){
        return $this->belongsTo(login::class);
    }
}