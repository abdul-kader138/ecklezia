<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MinistryNote extends Model
{
    public function ministry(){
        return $this->belongsTo(Ministry::class,'ministry_id');
    }
}
