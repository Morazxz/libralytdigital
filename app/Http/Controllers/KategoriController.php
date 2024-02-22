<?php

namespace App\Http\Controllers;

 //import Model "Kategori"
 use App\Models\Kategoris;

 //returm type View
 use Illuminate\View\View;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
   /**
    * index
    *
    * @return View
    */
    public function index(): View
    {
        //get kategori
        $kategori = Kategoris::latest()->paginate(5);

        //return view with kategori
        return view('kategori.index', compact('kategori'));
    }
}
