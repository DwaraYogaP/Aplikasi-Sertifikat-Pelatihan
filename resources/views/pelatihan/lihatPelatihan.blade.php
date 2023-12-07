<?php
 $id = $_GET['id'];
?>

@extends('template.template')

@section('nama', $id)

@section('content')
    <x-notify::notify />
    @notifyJs

    @foreach ($pelatihan as $pelatihan)
        <h1 class="text-3xl font-bold">{{$pelatihan['nama_pelatihan']}}</h1>
    @endforeach

    <button id="buttonTambahDataPelatihan" onclick="tambahDataPelatihan()" data-modal-target="tambahDataPelatihan" data-modal-toggle="tambahDataPelatihan" type="button" class="bg-blue-500 p-2 rounded px-3 text-white font-semibold my-6 hover:bg-blue-800">
        Tambah Materi
    </button>

    {{-- MODAL TAMBAH MATERI PELATIHAN --}}
    <div id="tambahDataPelatihan" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            {{-- Modal Content --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="close-tambahDataPelatihan" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Materi Pelatihan</h3>
                    <form class="space-y-6" action="{{ route('tambah-data-pelatihan') }}" method="POST">
                        @csrf
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Materi</label>
                            <input type="text" name="nama_materi" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Materi" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Pelatihan</label>
                            <input type="number" name="jpl" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea name="deskripsi" id="" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>
                        </div>
                        <div>
                            <input type="hidden" value="{{$id}}" class="" name="id_pelatihan">
                        </div>

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
            {{-- End Modal Content --}}
        </div>
    </div>
    {{-- END MODAL TAMBAH MATERI PELATIHAN --}}

    <span class=" p-3 ml-5">
        <div class="bg-slate-200 p-5 rounded-sm aspect-video h-28 shadow-md">
            <h1 class="text-xl font-bold">Peserta</h1>
            <h2 class="text-3xl font-bold">{{$count}}</h2>
            <a href="/pelatihan/detailPelatihan/{{$id}}/dataPeserta?id={{$id}}" class="hover:underline text-blue-500">Lihat Peserta</a>
        </div>
    </span>

    {{-- SHOW DATA --}}
    <div>
        <table id="tabel-data">
            <thead>
                <th>Nama</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($dataPelatihan as $item)
                    <tr class="">
                        <td class="text-2xl font-bold">{{$item->nama_materi}}</td>
                        <td class="text-end ">

                            <a href="{{ url('pelatihan/detailDataPelatihan?id='.$item->id)}}" class="px-4 py-1 bg-orange-400 text-white rounded mx-1 my-1 hover:bg-orange-600">Lihat</a>

                            <button id="buttonEditDataPelatihan{{$item->id}}" onclick="editPelatihan('editDataPelatihan{{$item->id}}', 'buttonEditDataPelatihan{{$item->id}}', 'close-editDataPelatihan{{$item->id}}')" data-modal-target="editPelatihan" data-modal-toggle="editPelatihan" type="button" class="buttonEditPelatihan px-4 py-1 bg-sky-400 text-white rounded mx-1 my-1 hover:bg-sky-600">Edit</button>
                            {{-- MODAL EDIT DATA --}}
                            <div id="editDataPelatihan{{$item->id}}" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-editDataPelatihan{{$item->id}}" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl text-left font-medium text-gray-900 dark:text-white">Edit Materi</h3>
                                            <form class="space-y-6" action="{{ url('/editDataPelatihan/'.$item->id) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <div>
                                                    <label for="" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Materi</label>
                                                    <input type="text" name="nama_materi" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Pelatihan" value="{{$item->nama_materi}}" required>
                                                </div>
                                                <div>
                                                    <label for="" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Pelatihan</label>
                                                    <input type="number" name="jpl" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$item->jpl}}" required>
                                                </div>
                                                <div>
                                                    <label for="" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                                    <textarea name="deskripsi" id="" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >{{$item->deskripsi}}</textarea>
                                                </div>

                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- End Modal Content --}}
                                </div>
                            </div>
                            {{-- END MODAL EDIT DATA --}}

                        <button id="buttonHapusDataPelatihan{{$item->id}}" onclick="hapusPelatihan('hapusDataPelatihan{{$item->id}}', 'buttonHapusDataPelatihan{{$item->id}}', 'close-hapusDataPelatihan{{$item->id}}', 'close-hapusPelatihanForm{{$item->id}}')" data-modal-target="hapusPelatihan" data-modal-toggle="hapusPelatihan" type="button" class="buttonHapusPelatihan px-4 py-1 mr-8 bg-red-500 text-white rounded mx-1 my-1 hover:bg-red-700">Hapus</button>
                        
                            {{-- MODAL HAPUS DATA --}}
                            <div id="hapusDataPelatihan{{$item->id}}" tabindex="-1" aria-hidden="true" class="hapusPelatihan fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-hapusDataPelatihan{{$item->id}}" type="button" class="close-hapusPelatihan absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white text-left">Hapus Pelatihan</h3>
                                            <form class="space-y-6" action="{{ url('/hapusDataPelatihan/'.$item->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="text-white text-left">
                                                    Apakah Anda yakin ingin menghapus pelatihan?
                                                </div>
                                                <div class="flex justify-center mt-4">
                                                    <button id="close-hapusPelatihanForm{{$item->id}}" type="button" class="close-hapusPelatihanForm text-white w-36 bg-sky-400 rounded-sm mx-2 hover:bg-sky-600 py-1">Tidak</button>
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
    {{-- END SHOW DATA --}}

@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
@endsection
