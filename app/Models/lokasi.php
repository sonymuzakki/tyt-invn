<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $table = 'lokasi';
    protected $guarded;
    protected $primaryKey = 'idl' ;

    public function inventory(){
        return $this->belongsTo(inventory::class);
    }
}
