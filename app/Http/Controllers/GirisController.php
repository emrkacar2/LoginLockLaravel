<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;

class GirisController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $kullanici = Kullanici::where('username', $credentials['username'])->first();

        if (!$kullanici || $kullanici->password !== $credentials['password']) {
            return redirect('/fail')->with('error', 'Kullanıcı adı veya şifre hatalı.');
        }

        return redirect('/success')->with('success', 'Giriş başarılı.');
    }
}
