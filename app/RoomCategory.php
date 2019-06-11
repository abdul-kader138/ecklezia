<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    public function room(){
        return $this->hasMany(Room::class,'category_id');
    }
}
