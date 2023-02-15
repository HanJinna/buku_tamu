<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_in extends Model
{
    use HasFactory;
    protected $fillable =[
    'id_pengunjung',
    'date',
    'ttd'
    ];

    protected $table ='check_ins';

    public function pengunjung(){
        return $this->belongsTo('App\Models\data_pengunjung','id');
    }
}
