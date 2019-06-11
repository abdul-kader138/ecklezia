<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assetcontribution extends Model
{
    protected $table = 'assetcontributions';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'occupation',
        'address',
        'country',
        'city',
        'state',
        'zip',
        'first_name',
        'last_name',
        'description',
        'estimated_amount'
    ];
}
