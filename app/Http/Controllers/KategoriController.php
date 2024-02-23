<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//return type View
use Illuminate\View\View;



class KategoriController extends Controller
{
    //public function index(){
    //    return view('kategori.index');
    //}

    public function index()
    {
        $kategori = Kategori::latest();

        $posts = $kategori->paginate(5);
        return view('kategori.index', compact('posts'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nm_kategori' => 'required',
        ]);
        $model = Kategori::create([
            'nm_kategori' => $request->nm_kategori,
        ]);
        return Redirect::route('kategori.index',$model)->with('success', 'Data Berhasil');{
        }
    }

    public function edit($id)
    {
        $model = Kategori::find($id);
        return view('kategori.edit', compact('model'));
    }
        //public function destroy($id): RedirectResponse{
        //$post = Post::findorFail($id);
        //$post->delete();
        //return Redirect::route('post.index')->with('success', 'Data Berhasil');
        //{
        //}
}
