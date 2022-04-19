<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Penulis::all();
        return view('list-penulis', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create-data-penulis');
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
            'nama' => 'required|max:100',
            // 'isi' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required',
            'about' => 'required',

        ]);
        Penulis::create($validatedData);
        return redirect()->route('penulis.list-penulis')->with('tambah_data', 'Penambahan Pengguna berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Penulis::where('id', $id)->first();
        return view('detail-data-penulis', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Penulis::where('id', $id)->first();
        return view('edit-data-penulis', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            // 'isi' => 'required',
            'jenisKelamin' => 'required',
            'tanggalLahir' => 'required',
            'about' => 'required',

        ]);
        $penulis = Penulis::findOrFail($id);
        $penulis->update($validatedData);
        return redirect()->route('penulis.list-penulis')->with('edit_data', 'Pengeditan Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();
		return redirect()->route('penulis.list-penulis')->with('hapus_data', 'Penghapusan data berhasil');
    }
}
