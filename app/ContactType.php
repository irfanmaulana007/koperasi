<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactType extends Model
{
    protected $table = 'ms_contact_type';
    protected $fillable = [
        'contact_type_name',
    ];
}
