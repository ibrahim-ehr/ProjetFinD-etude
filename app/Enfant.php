<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    public $guarded=[''];
    public function groupe(){
        return $this ->belongsTo(Groupe::class);
    }
    /*public function section(){
        return $this ->belongsTo(Section::class);
    }*/
}
