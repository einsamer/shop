<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    //

    protected $fillable = ['cata_name'];

    public function item() {
        $this->hasMany('App\Item');
    }
}
