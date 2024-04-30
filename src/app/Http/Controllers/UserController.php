<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function mypage()
    {
        $user = User::find(Auth::id())->with('reservations', 'likes.area', 'likes.genre', 'likes.likes')->first();

        return view('/mypage', compact("user"));
    }
}
