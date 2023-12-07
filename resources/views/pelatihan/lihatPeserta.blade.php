<?php
 $id = $_GET['id'];
?>

@extends('template.template')

@section('nama', 'Peserta')

@section('content')
    <x-notify::notify />
    @notifyJs
    

    <h1 class="text-3xl font-bold">Daftar Peserta</h1>

    <button id="buttonTambahPeserta" onclick="tambahPeserta()" data-modal-target="tambahPeserta" data-modal-toggle="tambahPeserta" type="button" class="bg-blue-500 p-2 rounded px-3 text-white font-semibold my-6 hover:bg-blue-800">
        Tambah Peserta
    </button>

    {{-- MODAL TAMBAH DATA --}}
    <div id="tambahPeserta" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            {{-- Modal Content --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="close-tambahPeserta" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Peserta Pelatihan</h3>
                    <form class="space-y-6" action="{{ route('tambah-peserta') }}" method="POST">
                        @csrf
                        <div>
                            <select name="id_user" id="nama_peserta" onchange="copyTextValue()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                <option value="" selected disabled hidden>Pilih Peserta</option>
                                @foreach ($user as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <input type="hidden" name="nama" id="input_nama">
                            <input type="hidden" name="id_pelatihan" value="{{$id}}">             
                        </div>


                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
            {{-- End Modal Content --}}
        </div>
    </div>
    {{-- END MODAL TAMBAH DATA --}}


    {{-- SHOW DAFTAR PESERTA --}}
    <div>
        <table id="tabel-data">
            <thead>
                <th>Nama</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($peserta as $peserta)
                    <tr>
                        <td>{{$peserta->nama}}</td>
                        <td>
                            <button id="buttonHapusDataPelatihan{{$peserta->id_peserta}}" onclick="hapusPelatihan('hapusDataPelatihan{{$peserta->id_peserta}}', 'buttonHapusDataPelatihan{{$peserta->id_peserta}}', 'close-hapusDataPelatihan{{$peserta->id_peserta}}', 'close-hapusPelatihanForm{{$peserta->id_peserta}}')" data-modal-target="hapusPelatihan" data-modal-toggle="hapusPelatihan" type="button" class="buttonHapusPelatihan px-4 py-1 mr-8 bg-red-500 text-white rounded mx-1 my-1 hover:bg-red-700">Hapus</button>

                                {{-- MODAL HAPUS DATA --}}
                                <div id="hapusDataPelatihan{{$peserta->id_peserta}}" tabindex="-1" aria-hidden="true" class="hapusPelatihan fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                        {{-- Modal Content --}}
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button id="close-hapusDataPelatihan{{$peserta->id_peserta}}" type="button" class="close-hapusPelatihan absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="px-6 py-6 lg:px-8">
                                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white text-left">Hapus Pelatihan</h3>
                                                <form class="space-y-6" action="{{ url('/hapusPeserta/'.$peserta->id_peserta) }}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="text-white text-left">
                                                        Apakah Anda yakin ingin menghapus pelatihan?
                                                    </div>
                                                    <div class="flex justify-center mt-4">
                                                        <button id="close-hapusPelatihanForm{{$peserta->id_peserta}}" type="button" class="close-hapusPelatihanForm text-white w-36 bg-sky-400 rounded-sm mx-2 hover:bg-sky-600 py-1">Tidak</button>
                                                        <button type="submit" class="text-white w-36 bg-red-400 rounded-sm mx-2 hover:bg-red-600 py-1">Ya</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        {{-- End Modal Content --}}
                                    </div>
                                </div>
                                {{-- END MODAL HAPUS DATA --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- END SHOW DAFTAR PESERTA --}}
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

    const areaSelect = document.querySelector(`[id="nama_peserta"]`);

    areaSelect.addEventListener(`change`, (e) => {
        const select = e.target;
        const value = select.value;
        const desc = select.options[select.selectedIndex].text;
        const input = document.getElementById('input_nama').value = desc;
    });
    
</script>
@endsection