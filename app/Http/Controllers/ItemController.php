<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    //
    public function getListItem() {

        $items = Item::take(5)->get();

        return  $items;
    }
}
