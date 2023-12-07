<?php

namespace App\Http\Controllers;

use App\Models\Data_Pelatihan;
use App\Models\Data_Peserta;
use App\Models\Pelatihan;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $user = auth()->user();
        $pelatihan = Data_Peserta::select()
        ->join('pelatihan', 'pelatihan.id', 'data_peserta.id_pelatihan')
        ->where('id_user', $user->id)
        ->get();

        $sertifikat = Data_Peserta::select()
        ->join('pelatihan', 'pelatihan.id', 'data_peserta.id_pelatihan')
        ->join('sertifikat', 'sertifikat.id_pelatihan', 'data_peserta.id_pelatihan')
        ->where('id_user', $user->id)
        ->get();

        $join = Data_Peserta::select()
        ->join('pelatihan', 'pelatihan.id', 'data_peserta.id_pelatihan')
        ->join('sertifikat', 'sertifikat.id_pelatihan', 'data_peserta.id_pelatihan', 'Full')
        ->where('id_user', $user->id)
        ->get();

        $result = Pelatihan::leftJoin('sertifikat', 'sertifikat.id_pelatihan', 'id')
        ->select()
        ->get();

        return view('user.user', compact('user', 'pelatihan', 'sertifikat', 'join', 'result'));
    }

    public function pelatihan() {
        $id_pelatihan = $_GET['id'];

        $pelatihan = Data_Pelatihan::select()
        ->join('pelatihan', 'pelatihan.id', 'data_pelatihan.id_pelatihan')
        ->where('id_pelatihan', $id_pelatihan)
        ->get();

        $materi = Data_Pelatihan::select()->where('id_pelatihan', $id_pelatihan)->get();
        return view('user.pelatihan', compact('pelatihan', 'materi'));
    }

    public function detailPelatihan() {
        $id = $_GET['id'];

        $materi = Data_Pelatihan::select()->where('id', $id)->get();

        return view('user.detailPelatihan', compact('materi'));

    }

    public function sertifikat() {
        $user = auth()->user();

        $id = $_GET['id'];
        $sertifikat = Sertifikat::select()
        ->join('pelatihan', 'pelatihan.id', 'sertifikat.id_pelatihan')
        ->join('template', 'template.id_template', 'sertifikat.id_template')
        ->where('id_pelatihan', $id)
        ->get();
        $peserta = Data_Peserta::select()->where('id_user', $user->id)->where('id_pelatihan', $id)->get();
        $pelatihan = Data_Pelatihan::select()->where('id_pelatihan', $id)->get();

        $materi = Data_Pelatihan::select()
        ->where('id_pelatihan', $id)
        ->get();
        $materi2 = Data_Pelatihan::select()
        ->where('id_pelatihan', $id)
        ->get();
        $countMateri = Data_Pelatihan::select()
        ->where('id_pelatihan', $id)
        ->count();

        $sumJPL = Data_Pelatihan::select()->where('id_pelatihan', $id)->sum('jpl');


        return view('user.sertifikat.sertifikat', compact('sertifikat', 'peserta', 'pelatihan','materi', 'materi2', 'countMateri', 'sumJPL'));
    }
}
