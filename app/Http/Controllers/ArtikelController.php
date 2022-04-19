<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //diletakkan di dashboard untuk passing semua data
        $data = Artikel::all();
        return view('list-data', [
            'data' => $data
        ]);
        // passing array supaya bisa banyak data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            // 'isi' => 'required',
            'genre' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|numeric',

        ]);
        Artikel::create($validatedData);
        return redirect()->route('artikel.home')->with('tambah_data', 'Penambahan Pengguna berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Artikel::where('id', $id)->first();
        return view('detail-data', [
            'data' => $data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ambil data dgn id tersebut trus di passing ke edit data
        $data = Artikel::where('id', $id)->first();
        return view('edit-data', [
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            // 'isi' => 'required',
            'genre' => 'required',
            'penulis' => 'required',
            'tahun' => 'required|numeric',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->update($validatedData);
        return redirect()->route('artikel.home')->with('edit_data', 'Pengeditan Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
		return redirect()->route('artikel.home')->with('hapus_data', 'Penghapusan data berhasil');

    }
}
