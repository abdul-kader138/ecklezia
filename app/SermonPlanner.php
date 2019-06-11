<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SermonPlanner extends Model
{
    protected $table = 'sermonplanners';

    protected $fillable = [
        'title',
        'purpose',
        'opening_scripture',
        'created_date',
        'preaching_date',
        'main_scripture',
        'sermon',
        'conclusion'
    ];
}
