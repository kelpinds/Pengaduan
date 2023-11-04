<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view("Administrator.Login");
    }
    public function ceklogin(Request $request){
        $s = new Petugas();
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/admin');
        }
        return back();
    }   
    public function logout(){
        session()->flush();
        return  redirect('admin/login');
    }
    public function register(){
        return view("Administrator.registrasi");
    }
    public function data(Request $request){
       
        $cek = $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required|min:3',
            'password' => 'required|min:4',
            'level' => 'required',
            'telp' => 'required|max:13'
        ]);
        $c = new Petugas();
        $c->create([
            'nama_petugas'=>$request->nama_petugas,
            'username'=>$request->username,
            'password'=>$request->password,
            'level'=>$request->level,
            'telp'=>$request->telp
        ]);
        return back()->with('pesan', 'anda berasil registrasi');
    }
    public function pengaduan()
    {
        return view('Masyarakat.pengaduan');
    }
    public function validasi(){
        $lapor = new pengaduan;
        return view('Administrator.validasi',['data'=>$lapor->all()]);

    }
    public function index(){
        $lapor = new pengaduan;
        return view('Administrator.index',['data'=>$lapor->all()]);

    }
    public function status($id){
        $status = new Pengaduan;
        $status->find($id)->update(['status'=>'proses']);
        return back();
    }
}
