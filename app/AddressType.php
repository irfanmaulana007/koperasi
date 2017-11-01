<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{
    protected $table = 'ms_address_type';
    protected $fillable = [
        'address_type_name',
    ];
}
