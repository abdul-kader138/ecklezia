<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    protected $table = 'pledges';

    protected $fillable = [
      'first_name',
      'last_name',
      'phone',
      'date',
      'pledge_id',
      'estimated_amount',
      'payment_status',
      'financial_officer'
    ];
}
