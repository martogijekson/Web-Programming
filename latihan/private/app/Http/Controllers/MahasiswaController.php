<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use DB;

class MahasiswaController extends Controller
{
    //
    public function index(){
        // panggil menggunakan model
        $mahasiswa = Mahasiswa::all();
        // panggil dengan tabel
        // $mahasiswa = DB::table('tb_mahasiswa')->get();
        // panggil menggunakan DB
        // $mahasiswa = DB::select("Select * from tb_mahasiswa");
        // dd($mahasiswa)
        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        return redirect(URL('/mahasiswa'));
    }

    public function edit($id){
        $data= Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('data'));
    }

    public function update($id, Request $request){
        $data = Mahasiswa::find($id);
        $data->update($request->all());

        return redirect(URL('/mahasiswa'));
    }

    public function destroy($id, Request $request){
        $data = Mahasiswa::find($id);
        $data->delete();

        return redirect(URL('/mahasiswa'));
    }
}
