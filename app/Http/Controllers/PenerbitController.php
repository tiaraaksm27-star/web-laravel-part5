<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penerbit;
use App\Models\Telepon;

class PenerbitController extends Controller
{

    public function index()
    {
       // Ambil Penerbit beserta relasi Telepon
       $data_penerbit = Penerbit::with('telepon')->get();
       $jumlah_data = $data_penerbit->count();
       return view('penerbit.tampil', ['PenerbitBuku' =>
       $data_penerbit,
       'JumlahPenerbitBuku' => $jumlah_data]);
    }

    public function create()
    {
        return view('penerbit.tambah');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        $penerbit = Penerbit::create($input);

        $telepon= new Telepon;
        $telepon->telepon = $request->no_telp;
        $penerbit->telepon()->save($telepon);
        return redirect('/penerbit');
    }

    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
{
    $data_penerbit = Penerbit::where('id_penerbit', $id)->first();
    return view('penerbit.edit', [
        'PenerbitBuku' => $data_penerbit
    ]);
}

    
    public function update(Request $request, string $id)
    {
        $penerbit = Penerbit::find($id);
        $input = $request->all();
        $penerbit->update($input);

        $telepon= $penerbit->telepon;
        $telepon->telepon = $request->no_telp;
        $penerbit->telepon()->save($telepon);

        return redirect('/penerbit');
    }

    
    public function destroy(string $id)
    {
        $penerbit = Penerbit::find($id);
        $penerbit->delete();
        return redirect('/penerbit');
    }
}
