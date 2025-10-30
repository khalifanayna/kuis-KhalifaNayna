<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataBuku'] = Pelanggan::all();
        return view('buku.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['judul_buku']       = $request->judul_buku;
        $data['penulis']          = $request->penulis;
        $data['penerbit']         = $request->penerbit;
        $data['tahun_terbit']     = $request->tahun_terbit;
        $data['jumlah_ekslempar'] = $request->jumlah_ekslempar;

        buku::create($data);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataBuku'] = buku::findOrFail($id);
        return view('buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data['judul_buku']       = $request->judul_buku;
        $data['penulis']          = $request->penulis;
        $data['penerbit']         = $request->penerbit;
        $data['tahun_terbit']     = $request->tahun_terbit;
        $data['jumlah_ekslempar'] = $request->jumlah_ekslempar;

        buku::where('buku_id', $id)->update($data);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = buku::findOrFail($id);

        $buku->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
