<?php

namespace App\Http\Controllers;

//use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;;

class AuthController extends Controller
{
    public function login()
    {
        return view('authantication.login', ['title' => 'Login']);
    }
    public function register()
    {
        return view('authantication.register', ['title' => 'Registrasi']);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registrasi(Request $request)
    {
        $validationData = $request->validate([
            'email' => 'email:rfc,dns|unique:users',
            'password' => 'required|min:6',
            'level' => 'required|in:operator, pelanggan, pemilik',
        ]);

        /* Sotre data user */
        $user = new User();
        $user->email = $validationData['email'];
        $user->password = bcrypt($validationData['password']);
        $user->save();

        /* Store data pelanggan */
        $pelanggan = new Pelanggan();
        $pelanggan->nama_lengkap = $validationData['nama'];
        $pelanggan->no_hp = $validationData['no_hp'];
        $pelanggan->alamat = $validationData['alamat'];
        $pelanggan->foto = $validationData['foto'];
        $user->pelanggans()->save($pelanggan);

        $result = $user->save();
        if ($result) {
            return redirect(Route('login'))->with('success', 'You Have Successfully Created an Account');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
