<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confidential extends Model
{
    protected $table = 'confidentials';

    protected $fillable = [
      'first_name', 'last_name', 'purpose', 'date', 'category', 'phone', 'parties_involve', 'notes', 'conclusion'
    ];
}
