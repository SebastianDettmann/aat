<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $fillable = [
        'title',
        'description',
        'color',
        'has_to_confirm'
    ];
}
