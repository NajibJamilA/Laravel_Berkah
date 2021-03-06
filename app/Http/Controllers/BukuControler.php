<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuControler extends Controller
{
    public function inputfield()
    {
        return view('addBooks');
    }
    public function inputprocess(Request $request)
    {
      $buku = new Buku([
          'judul' => $request->get('judul'),
          'penerbit' => $request->get('penerbit'),
          'tahun_terbit' => $request->get('tahun_terbit'),
          'pengarang' => $request->get('pengarang'),
      ]);
      $buku->save();
      // dd($request);
      return redirect('/');
    }
}
