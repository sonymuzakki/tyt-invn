<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_request extends Model
{
    protected $table = 'laporan_req';
    protected $primaryKey = 'idr';
    protected $guarded;
    protected $casts = ['created_at' => 'datetime:Y-m-d',];

    public function users(){
        return $this->hasOne(users::class,'idu','idu');
    }

    

}