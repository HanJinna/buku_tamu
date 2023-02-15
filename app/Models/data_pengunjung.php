<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pengunjung extends Model
{
    use HasFactory;

    protected $fillable =[
    'bulan_tanggal',
    'nama',
    'alamat',
    'no_tlp',
    'status_pengunjung',
    'keperluan'
    ];

    protected $table ='data_pengunjungs';

    public function check_in(){
        return $this->hasMany('App\Models\check_in','id_pengunjung');
    }

    public function check_out(){
        return $this->hasMany('App\Models\check_out','id_pengunjung');
    }

}
