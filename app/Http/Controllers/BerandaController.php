<?php

namespace App\Http\Controllers;

use App\Models\Data_Peserta;
use App\Models\Pelatihan;
use App\Models\Sertifikat;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index() {
        $login = Auth()->user();
        $pelatihan = Pelatihan::all();
        $countSertifikat = DB::table('sertifikat')->count();
        $countTemplate = Template::select()->count();

        $peserta = Data_Peserta::select('nama_pelatihan', DB::raw('COUNT(nama_pelatihan) as jml_peserta'))
        ->join('pelatihan', 'pelatihan.id', 'data_peserta.id_pelatihan')
        ->groupby('nama_pelatihan')
        ->get();

        $countPeserta = Data_Peserta::select()
        ->distinct('id_user')
        ->count();

        return view('beranda.beranda', compact('login','pelatihan', 'countSertifikat', 'peserta', 'countTemplate', 'countPeserta'));
    }

    public function tambahUser(Request $request) {
        User::create($request->except(['_token', 'submit']));
        notify()->success('Data Berhasil Ditambahkan');

        return redirect()->back();
    }
}
