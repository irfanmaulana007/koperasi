<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrsSimpanan extends Model
{
    protected $table = 'trs_simpanan';
    protected $fillable = [
        'id_user','jumlah_simpanan','keterangan','id_status'
    ];
}
