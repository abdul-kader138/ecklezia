<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giving extends Model
{
    public function contribution(){
        return $this->belongsTo(Contribution::class,'contribution_id');
    }
    public function people(){
        return $this->belongsTo(People::class,'contributor_id');
    }
}
