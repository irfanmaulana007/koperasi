<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'ms_contact';
    protected $fillable = [
        'contact_name','contact_position','phone','email','socialmedia',
    ];
}
