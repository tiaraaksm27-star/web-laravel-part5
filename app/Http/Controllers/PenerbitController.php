<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_penerbit = DB::table('penerbit')->select('*')
        ->orderBy('penerbit','ASC')->get();
        $jumlah_data = DB::table('penerbit')->select('penerbit',
        DB::raw('COUNT(penerbit) as jumlah_penerbit'))
        ->groupBy('penerbit')->get();return view('penerbit.tampil', ['PenerbitBuku' =>
        $data_penerbit, 'JumlahPenerbitBuku' => $jumlah_data]);
    }

    public function create()
    {
        return view('penerbit.tambah');
    }

   
    public function store(Request $request)
    {
        $dataPenerbit = array(
            'penerbit' => $request->penerbit,
            'alamat' => $request->alamat,
            );
        DB::table('penerbit')->insert($dataPenerbit);
        return redirect('/penerbit');
    }

    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data_penerbit = DB::table('penerbit')->select('*')
        ->where('id_penerbit',$id)->first();
        return view('penerbit.edit', ['PenerbitBuku' => 
        $data_penerbit]);
    }

    
    public function update(Request $request, string $id)
    {
        $dataPenerbit = array(
            'penerbit' => $request->penerbit,
            'alamat' => $request->alamat,
        );
        $data_penerbit = DB::table('penerbit')
        ->where('id_penerbit',$id)
        ->update($dataPenerbit);
        return redirect('/penerbit');
    }

    
    public function destroy(string $id)
    {
        DB::table('penerbit')->where('id_penerbit',$id)->delete();
        return redirect('/penerbit');
    }
}
