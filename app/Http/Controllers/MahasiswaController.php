<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

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

        $jenis_produks = ['Alat Tulis', 'Elektronik', 'Sembako'];

        return view('tambah', ["jenis_produks" => $jenis_produks]);
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
    public function show()
    {  
        $produks = [
            [
                'kode_produk' => 'BRG001',
                'nama_produk' => 'Pena',
                'jenis_produk' => 'Alat Tulis',
                'harga' => '20000'
            ],
            [
                'kode_produk' => 'BRG002',
                'nama_produk' => 'Buku',
                'jenis_produk' => 'Alat Tulis',
                'harga' => '15000'   
            ]
            ];

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
