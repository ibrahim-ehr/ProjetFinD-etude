<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public $guarded=[''];
    public function section(){
        return $this ->belongsTo(Section::class);
    }
    public function enfants(){
        return $this ->hasMany(Enfant::class);
    }
}
