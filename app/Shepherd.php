<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shepherd extends Model
{
    protected $table = 'shepherds';

    protected $fillable = [
      'first_name', 'last_name', 'email', 'username', 'password', 'phone'
    ];
    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
    public function checkActivity(){
        return $this->hasMany(CheckActivity::class,'shepard_id');
    }
}
