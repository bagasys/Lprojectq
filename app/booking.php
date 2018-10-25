<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['nrp_peminjam','nama_kegiatan','waktu_mulai','waktu_selesai'];

    public function peminjam(){
        return $this->hasMany('app/peminjam');
    }
}
