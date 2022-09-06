<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $table = 'divisi';
    protected $guarded;
    protected $primaryKey = 'idd' ;

    public function inventory(){
        return $this->belongsTo(inventory::class);
    }

}
