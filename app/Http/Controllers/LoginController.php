<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function cek_login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //cek username/email atau password benar/tersedia
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // ambil data hak_akses dari user yang login
            $hak_akses = Auth::user()->hak_akses;
            // cek hak akses
            if ($hak_akses == 'admin') {
                // menampilkan tampilan admin/home
                return redirect()->intended('/admin/home');
            }elseif($hak_akses == 'kasir') {
                echo "Selamat datang Kasir";
            }else{
                echo "Hak Akses tidak terdaftar";
            }

        }else{
            echo "<h1>Gagal Login</h1>";
        }
        // dd($request);
        // die;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
