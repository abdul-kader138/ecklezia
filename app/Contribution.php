<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $table = 'contributions';
    public function giving(){
        return $this->hasMany(Giving::class,'contribution_id');
    }
}
