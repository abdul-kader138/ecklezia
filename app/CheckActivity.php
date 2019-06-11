<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckActivity extends Model
{
    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
    public function shepard(){
        return $this->belongsTo(Shepherd::class,'shepard_id');
    }
}
