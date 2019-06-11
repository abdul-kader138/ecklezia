<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    public function people(){
        return $this->belongsTo(People::class,'family_member_id');
    }
}
