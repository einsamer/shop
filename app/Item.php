<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

    protected $fillable = ['cata_id', 'item_name', 'item_product'];


    public function catagory() {
        $this->belongsTo('App\Catagory');
    }
}
