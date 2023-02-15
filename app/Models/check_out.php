<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check_out extends Model
{
    use HasFactory;
    protected $fillable =[
    'id_pengunjung',
    'date',
    'deskripsi'
    ];

    protected $table ='check_outs';

    public function pengunjung(){
        return $this->belongsTo('App\Models\data_pengunjung','id');
    }
}
