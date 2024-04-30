<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        //session()->flash('fs_msg', null);
        return view('index', compact("items"));
    }

    public function detail($item_id)
    {
        $item = Item::findOrFail($item_id);
        $item_url = $item->item_url;

        return view('detail', compact('item','item_url'));
    }
}
