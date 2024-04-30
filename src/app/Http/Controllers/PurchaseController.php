<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //loginページ表示
    public function showLogin()
    {
        return view('login');
    }
}
