<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $produks = [
            [
                'id' => 1,
                'nama' => 'Laptop ASUS VivoBook',
                'kategori' => 'Elektronik',
                'harga' => 12000000,
                'stok' => 15
            ],
            [
                'id' => 2,
                'nama' => 'Smartphone Samsung Galaxy S23',
                'kategori' => 'Elektronik',
                'harga' => 9500000,
                'stok' => 25
            ],
            [
                'id' => 3,
                'nama' => 'Smart Watch Apple Watch 8',
                'kategori' => 'Aksesoris',
                'harga' => 7200000,
                'stok' => 10
            ],
            [
                'id' => 4,
                'nama' => 'Wireless Earbuds Sony WF-1000XM4',
                'kategori' => 'Audio',
                'harga' => 3800000,
                'stok' => 20
            ],
            [
                'id' => 5,
                'nama' => 'Mechanical Keyboard Logitech G Pro X',
                'kategori' => 'Aksesoris Komputer',
                'harga' => 1500000,
                'stok' => 30
            ],
        ];

        return view('pengelolaan', compact('produks'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}
