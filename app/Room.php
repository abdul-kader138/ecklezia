<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function category(){
        return $this->belongsTo(RoomCategory::class,'category_id');
    }
}
