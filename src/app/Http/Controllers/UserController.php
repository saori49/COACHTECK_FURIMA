<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function mypage()
    {
        //$user = User::find(Auth::id())->with('reservations', 'likes.area', 'likes.genre', 'likes.likes')->first();

        return view('/mypage');
    }

    public function profile()
    {
        //$user = User::find(Auth::id())->with('reservations', 'likes.area', 'likes.genre', 'likes.likes')->first();

        return view('/profile');
    }

    //更新機能
    public function updateProfile(Request $request)
    {
        // ユーザー名の更新
        $user = auth()->user(); // ログインしているユーザーを取得
        $user->name = $request->input('name');
        $user->save();

        // プロフィール情報の更新
        $profile = $user->profile; // ユーザーのプロフィール情報を取得
        $profile->postal_code = $request->input('postal_code');
        $profile->address = $request->input('address');
        $profile->building_name = $request->input('building_name');
        $profile->save();

        // リダイレクトまたはその他の処理
        return redirect()->back()->with('success', 'プロフィールが更新されました！');
    }
}
