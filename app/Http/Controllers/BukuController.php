<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Buku;
use App\Models\Kategori;
//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
       $buku = Buku::latest()->paginate(5);
       return view('buku.index', compact('buku'));
    }

    public function create(): View
    {
       $data = [
        'buku' => new Buku(),
        'kategoris' =>
    Kategori::pluck('nm_kategori', 'id'),
       ];
       return view('buku.create', $data);
    }

    public function store(Request $request)
    {
        $buku = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_penerbit' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategori' => 'required',
        ]);
        $image = $request->file('gambar');
        $namaGambar = time() . '.' . $image->extension();
        $image->move(public_path('img/buku'), $namaGambar);

        buku::create($buku);
        return redirect('/buku');
    }
}
