<?php

namespace App\Http\Controllers;

use App\Models\Data_Pelatihan;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPelatihanController extends Controller
{
    public function index() {
        $login = Auth()->user();

        $id = $_GET['id'];
        $dataPelatihan = Data_Pelatihan::select()->where('id_pelatihan', $id)->orderBy('created_at')->get();
        $pelatihan = Pelatihan::select('nama_pelatihan')->where('id', $id)->get();
        $count = DB::table('data_peserta')->where('id_pelatihan', $id)->count();

        return view('pelatihan.lihatPelatihan', compact('login','dataPelatihan', 'pelatihan', 'count'));
    }

    public function tambah(Request $request) {
        Data_Pelatihan::create($request->except(['_token', 'submit']));
        notify()->success('Data Berhasil Ditambahkan');

        return redirect()->back();

    }

    public function edit($id, Request $request) {
        $data = Data_Pelatihan::find($id);
        $data->update($request->except(['_token', 'submit']));
        notify()->success('Data Berhasil Diubah');


        return redirect()->back();
    }

    public function hapus($id) {
        $pelatihan = Data_Pelatihan::find($id);
        $pelatihan->delete();
        notify()->success('Data Berhasil Dihapus');


        return redirect()->back();
    }

    public function detail() {
        $login = Auth()->user();

        $id = $_GET['id'];
        $pelatihan = Pelatihan::select()->where('id', $id)->get();
        $dataPelatihan = Data_Pelatihan::select()->where('id', $id)->get();

        return view('pelatihan.detailPelatihan', compact('login', 'dataPelatihan', 'pelatihan'));
    }
}
