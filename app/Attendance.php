<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';
    public function service(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
