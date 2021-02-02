<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')-get();
        return view('home', ['mahasiswa' => $mahasiswa]);
    }
    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/homer');
 
    }
}
