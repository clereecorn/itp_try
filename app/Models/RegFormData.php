<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegFormData extends Model
{
    use HasFactory;

    protected $fillable = [
            // student
            'sName',
            'sContact',
            'sEmail',
            'sAddress',

            // guardian
            'gName',
            'gRelation',
            'gContact',
            'gEmail',
            'gAddress'
        ];
}
