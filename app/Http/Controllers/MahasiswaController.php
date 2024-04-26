<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $file_jenis = file_get_contents(base_path('storage/json/jenis_produk.json'));
        $jenis_produks = json_decode($file_jenis);

        return view('tambah', ["jenis_produks" => $jenis_produks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file_produk = file_get_contents(base_path('storage/json/produk.json'));
        $produks = json_decode($file_produk);

        $newData = [
            'kode_produk' => $request->input('kode_produk'),
            'nama_produk' => $request->input('nama_produk'),
            'jenis_produk' => $request->input('jenis_produk'),
            'harga' => $request->input('harga'),
        ];

        $produks[]= $newData;

        $inputData = json_encode($produks);
        file_put_contents(base_path('storage/json/produk.json'), $inputData);

        return redirect()->route('produk.show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {  
            $file_produk = file_get_contents(base_path('storage/json/produk.json'));
            $produks = json_decode($file_produk);
            return view('produk', ['produks' => $produks]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
