<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntityType extends Model
{
    protected $table = 'ms_entity_type';
    protected $fillable = [
        'entity_type_name',
    ];
}
