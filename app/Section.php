<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public $guarded=[''];
    public function groupes(){
        return $this ->hasMany(Groupe::class);
    }
}
