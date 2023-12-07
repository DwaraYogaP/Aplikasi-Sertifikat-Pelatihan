<?php

namespace App\Http\Controllers;

use App\Models\Data_Pelatihan;
use App\Models\Data_Peserta;
use App\Models\Pelatihan;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SertifikatController extends Controller
{
    public function index() {
        $login = Auth()->user();


        $pelatihan = Pelatihan::all();
        $sertifikat = Sertifikat::select()
        ->join('pelatihan', 'pelatihan.id', 'sertifikat.id_pelatihan')->get();
        return view('sertifikat.sertifikat', compact('login','pelatihan', 'sertifikat'));
    }

    public function tambah(Request $request) {
        $countSertifikat = Sertifikat::select()
        ->where('id_pelatihan', $request->id_pelatihan)
        ->count();

        $countNomorSertifikat = Sertifikat::select()
        ->where('nomor_sertifikat', $request->nomor_sertifikat)
        ->count();

        if($countSertifikat > 0) {
            notify()->info('Data Sudah Ada');
            return redirect('/sertifikat');
        } else {
            if($countNomorSertifikat > 0) {
                notify()->info('Nomor Seritifikat Sudah Digunakan');
                return redirect('/sertifikat');
            } else {
                $data = Sertifikat::create($request->except(['_token', 'submit']));
                if($request->hasFile('ttd')) {
                    $request->file('ttd')->move('tandatangan/', $request->file('ttd')->getClientOriginalName());
                    $data->ttd = $request->file('ttd')->getClientOriginalName();
                    $data->save();
                }
                notify()->success('Data Berhasil Ditambahkan');
                return redirect('/sertifikat');
            }
        }
    }

    public function edit($id_sertifikat, Request $request) {
        $data = Sertifikat::find($id_sertifikat);
        $data->update($request->except(['_token', 'submit', 'ttd']));
        notify()->success('Data Berhasil Diubah');

        return redirect('/sertifikat');
    }

    public function hapus($id_sertifikat) {
        $sertifikat = Sertifikat::find($id_sertifikat);
        $sertifikat->delete();
        notify()->success('Data Berhasil Dihapus');

        return redirect('/sertifikat');
    }

    public function detail() {
        $login = Auth()->user();

        $id = $_GET['id'];

        $sertifikat = Sertifikat::select()
        ->join('pelatihan', 'pelatihan.id', 'sertifikat.id_pelatihan')
        ->where('id_sertifikat', $id)->get();

        $peserta = Data_Peserta::select()
        ->join('sertifikat', 'sertifikat.id_pelatihan', 'data_peserta.id_pelatihan')
        ->where('id_sertifikat', $id)->get();

        return view('sertifikat/detailSertifikat', compact('login', 'sertifikat', 'peserta'));
    }

    public function sertifikat($id_sertifikat, $id_peserta) {
        $login = Auth()->user();

        $id_pelatihan = $_GET['id_pelatihan'];

        $sertifikat = Sertifikat::select()
        ->join('template', 'template.id_template', 'sertifikat.id_template')
        ->where('id_sertifikat', $id_sertifikat)->get();
        $peserta = Data_Peserta::select()
        ->join('sertifikat', 'sertifikat.id_pelatihan', 'data_peserta.id_pelatihan')
        ->join('pelatihan', 'pelatihan.id', 'data_peserta.id_pelatihan')
        ->where('id_peserta', $id_peserta)->get();
        $pelatihan = Data_Pelatihan::select()->where('id_pelatihan', $id_pelatihan)->get();
        $countMateri = DB::table('data_pelatihan')->where('id_pelatihan', $id_pelatihan)->count();
        $sumJPL = Data_Pelatihan::select()->where('id_pelatihan', $id_pelatihan)->sum('jpl');

        return view('sertifikat.sertifikatPeserta', compact('login', 'sertifikat', 'peserta', 'pelatihan', 'countMateri', 'sumJPL'));
    }
}
