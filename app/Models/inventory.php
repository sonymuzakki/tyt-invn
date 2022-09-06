<?php

namespace App\Models;

use App\Models\divisi;
use App\Models\lokasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class inventory extends Model
{
    protected $table = 'inventory';
    protected $guarded;
    protected $primaryKey = 'id' ;



    public function divisi(){
        return $this->hasOne(divisi::class,'idd','idd');
    }

    public function lokasi(){
        return $this->hasOne(lokasi::class,'idl','idl');
    }
    public function users(){
        return $this->hasOne(users::class,'idu','idu');
    }
}