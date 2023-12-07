<?php

namespace App\Http\Controllers;

use App\Models\Data_Pelatihan;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index() {
        $login = Auth()->user();
        $pelatihan = Pelatihan::all();

        return view('pelatihan.pelatihan', compact('login','pelatihan'));
    }

    public function tambah(Request $request) {
        Pelatihan::create($request->except(['_token', 'submit']));
        notify()->success('Data Berhasil Ditambahkan');

        return redirect('/pelatihan');

    }
    public function edit($id, Request $request) {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->update($request->except(['_token', 'submit']));
        notify()->success('Data Berhasil Diubah');

        return redirect('/pelatihan');

    }

    public function hapus($id) {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();
        notify()->success('Data Berhasil Dihapus');

        return redirect('/pelatihan');
    }

}
