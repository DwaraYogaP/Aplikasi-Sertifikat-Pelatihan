<?php

namespace App\Http\Controllers;

use App\Models\Data_Peserta;
use App\Models\User;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    //
    public function index($id) {
        $login = Auth()->user();
        $user = User::all();
        $peserta = Data_Peserta::select()
        ->join('users', 'users.id', 'data_peserta.id_user')
        ->where('id_pelatihan', $id)->get();

        return view('pelatihan.lihatPeserta', compact('login','peserta', 'user'));
    }

    public function tambah(Request $request) {
        $countPeserta = Data_Peserta::select()->where('id_pelatihan', $request->id_pelatihan)
        ->where('id_user', $request->id_user)
        ->count();
        if($countPeserta > 0) {
            notify()->info('Peserta Sudah Ada');
            return redirect()->back();
        } else {
            notify()->success('Data Berhasil Ditambahkan');
            Data_Peserta::create($request->except(['_token', 'submit']));
            return redirect()->back();
        }

    }

    public function hapus($id) {
        $pelatihan = Data_Peserta::find($id);
        $pelatihan->delete();
        notify()->success('Data Berhasil Dihapus');

        return redirect()->back();
    }
}
