<?php
 $id = $_GET['id']
?>

@extends('template.template')

@section('nama', 'Detail Sertifikat')

@section('content')
    @foreach ($sertifikat as $sertifikat)
        <h1 class="text-3xl font-bold">{{$sertifikat['nama_pelatihan']}}</h1>
    @endforeach

    <div class="container mx-auto mt-4 mb-5">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="max-w-full overflow-x-auto flex items-center justify-center">
                    <table class="w-[90%] table-auto border-separate border-2">
                        <thead class="">
                            <tr class="bg-sky-600 text-white">
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                                <td class="p-2"><label for="">Nomor Sertifikat</label></td>
                                <td class="p-2"class="p-2"><h1>{{$sertifikat->nomor_sertifikat}}</h1></td>
                            </tr>
                            <tr class="bg-slate-300">
                                <td class="p-2"><label for="">Tanggal Diterbitkan</label></td>
                                <td class="p-2"><h1>{{$sertifikat->tgl_diterbitkan}}</h1></td>
                            </tr>
                            <tr class="">
                                <td class="p-2"><label for="">Font</label></td>
                                <td class="p-2"><h1>{{$sertifikat->font}}</h1></td>
                            </tr>
                            <tr class="bg-slate-300">
                                <td class="p-2"><label for="">Ukuran Kertas</label></td>
                                <td class="p-2"><h1>{{$sertifikat->ukuran_kertas}}</h1></td>
                            </tr>
                            <tr>
                                <td class="p-2"><label for="">Orientasi</label></td>
                                <td class="p-2"><h1>{{$sertifikat->orientasi}}</h1></td>
                            </tr>
                            <tr class="bg-slate-300">
                                <td class="p-2"><label for="">Template</label></td>
                                <td class="p-2"><h1>{{$sertifikat->id_template}}</h1></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div>
        <table id="tabel-data">
            <thead>
                <th>Nama Peserta</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($peserta as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>
                            <a href="/sertifikat/detailSertifikat/{{$item->id_sertifikat}}/{{$item->id_peserta}}?id_pelatihan={{$item->id_pelatihan}}" class="bg-sky-500 py-1 px-2 text-white hover:bg-sky-800 rounded">Lihat Sertifikat</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- {{$peserta}} --}}

@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
@endsection
    