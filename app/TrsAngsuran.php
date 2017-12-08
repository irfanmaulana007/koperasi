<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrsAngsuran extends Model
{
    protected $table = 'trs_angsuran';
    protected $fillable = [
        'id_pinjaman','jumlah_pinjaman','keterangan',
    ];
}
