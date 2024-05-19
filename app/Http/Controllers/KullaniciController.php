<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;


class KullaniciController extends Controller
{
    public function register(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = new Kullanici();
        $user->username = $username;
        $user->password = $password;
        $user->save();
        return 'Kayıt başarılı!';
}
}