<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinistryEvent extends Model
{
    public function ministry(){
        return $this->belongsTo(Ministry::class,'ministry_id');
    }
}
