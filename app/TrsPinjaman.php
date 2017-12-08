<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrsPinjaman extends Model
{
    protected $table = 'trs_pinjaman';
    protected $fillable = [
        'id_user','jumlah_pinjaman','keterangan',
    ];
}
