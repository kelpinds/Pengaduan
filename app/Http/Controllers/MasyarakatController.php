<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function login(){
        return view("masyarakat.Login");
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
    }   
    public function logout(){
        session()->flush();
        return redirect('/mayarakat/login');
    }
    public function register(){
        return view("Masyarakat.registrasi");
    }
    public function data(Request $request){
       
        $cek = $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required',
            'username' => 'required|min:3',
            'password' => 'required|min:4',
            'telp' => 'required|max:13'
        ]);
        $c = new Masyarakat();
        $c->create([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>$request->password,
            'telp'=>$request->telp
        ]);
       
        return back()->with('pesan', 'anda berasil registrasi');
        // return response()->json($request->all());
    
    }
    public function pengaduan()
    {
        return view('Masyarakat.pengaduan');
    }
    public function cekpengaduan(Request $request){
        $k =new Pengaduan();
          $foto = $request->file('foto');

          $folder = 'upload';

          $foto->move($folder,$foto->getClientOriginalName());
        // $s = $request->validate([
        //     'nik'=>'required|max:16',
        //     'tgl_pengaduan'=>'required|date',
        //     'foto'=>'required',
        //     'isi_laporan'=>'required'
      //  ]);
        
        $k->create([
            'nik'=>$request->input('nik'),
            'tgl_pengaduan'=>date('y-m-d'),
            'foto'=>$foto->getClientOriginalName(),
            'isi_laporan'=>$request->input('isi_laporan'),
            'status'=>'0'
        ]);
        return back()->with('pesan','laporan berhasil dikirim');
        
    }
    public function layout(){
        return view('LayoutMasyarakat');

    }
   
    

}
