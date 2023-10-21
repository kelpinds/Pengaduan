<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function login(){
        return view("Administrator.Login");
    }
    public function ceklogin(Request $request){
        $s = new Masyarakat();
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/masyarakat/layout');
        }
        return back();
    }   
    public function logout(){
        session()->flush();
        return back();
    }
    public function register(){
        return view("Masyarakat.registrasi");
    }
    public function data(Request $request){
        $c = new Masyarakat();
        $cek = $request->validate([
            'nik' => 'required|unique:masyarakat|max:16',
            'nama' => 'required',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'tepl' => 'required|max:13'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan', 'anda berasil registrasi');
    
    }
    public function pengaduan()
    {
        return view('Masyarakat.pengaduan');
    }
    public function layout(){
        return view('Masyarakat.LayoutMasyarakat');

    }
    

}
