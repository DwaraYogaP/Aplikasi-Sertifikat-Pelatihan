@extends('template.template')

@section('nama', 'Pelatihan')

{{-- CONTENT --}}
@section('content')
    <x-notify::notify />
    @notifyJs

    <h1 class="text-3xl font-bold">Pelatihan</h1>

    <button id="buttonTambahPelatihan" onclick="tambahPelatihan()" data-modal-target="tambahPelatihan" data-modal-toggle="tambahPelatihan" type="button" class="bg-blue-500 p-2 rounded px-3 text-white font-semibold my-6 hover:bg-blue-800">
        Tambah Data
    </button>

    {{-- MODAL TAMBAH DATA --}}
    <div id="tambahPelatihan" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            {{-- Modal Content --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="close-tambahPelatihan" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Pelatihan</h3>
                    <form class="space-y-6" action="{{ route('tambah-pelatihan') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelatihan</label>
                            <input type="text" name="nama_pelatihan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Pelatihan" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Penyelenggara</label>
                            <input type="text" name="nama_penyelenggara" id="" placeholder="Masukkan Nama Penyelenggara" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                            <input type="date" name="tgl_mulai" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
            {{-- End Modal Content --}}
        </div>
    </div>
    {{-- END MODAL TAMBAH DATA --}}

    
    {{-- SHOW PELATIHAN --}}
    <div class="">
        <table id="tabel-data">
            <thead>
                <th>Nama Pelatihan</th>
                <th>Nama Penyelenggara</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach($pelatihan as $pelatihan)
                <tr>
                    <td>{{$pelatihan->nama_pelatihan}}</td>
                    <td>{{$pelatihan->nama_penyelenggara}}</td>
                    <td>{{$pelatihan->tgl_mulai}}</td>
                    <td>{{$pelatihan->tgl_selesai}}</td>
                    <td>
                        <a href="{{ url('pelatihan/detailPelatihan?id='.$pelatihan->id)}}" class="px-4 py-1 bg-orange-400 text-white rounded mx-1 my-1 hover:bg-orange-600">Lihat</a>

                        <button id="buttonEditPelatihan{{$pelatihan->id}}" onclick="editPelatihan('editPelatihan{{$pelatihan->id}}', 'buttonEditPelatihan{{$pelatihan->id}}', 'close-editPelatihan{{$pelatihan->id}}')" data-modal-target="editPelatihan" data-modal-toggle="editPelatihan" type="button" class="buttonEditPelatihan px-4 py-1 bg-sky-400 text-white rounded mx-1 my-1 hover:bg-sky-600">Edit</button>
                            {{-- MODAL EDIT DATA --}}
                            <div id="editPelatihan{{$pelatihan->id}}" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-editPelatihan{{$pelatihan->id}}" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Pelatihan</h3>
                                            <form class="space-y-6" action="{{ url('/editPelatihan/'.$pelatihan->id) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelatihan</label>
                                                    <input type="text" name="nama_pelatihan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nama Pelatihan" value="{{$pelatihan->nama_pelatihan}}" required>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Penyelenggara</label>
                                                    <input type="text" name="nama_penyelenggara" id="" placeholder="Masukkan Nama Penyelenggara" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$pelatihan->nama_penyelenggara}}" required>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                                                    <input type="date" name="tgl_mulai" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"value="{{$pelatihan->tgl_mulai}}" required>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                                                    <input type="date" name="tgl_selesai" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$pelatihan->tgl_selesai}}" required>
                                                </div>

                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- End Modal Content --}}
                                </div>
                            </div>
                            {{-- END MODAL EDIT DATA --}}

                        <button id="buttonHapusPelatihan{{$pelatihan->id}}" onclick="hapusPelatihan('hapusPelatihan{{$pelatihan->id}}', 'buttonHapusPelatihan{{$pelatihan->id}}', 'close-hapusPelatihan{{$pelatihan->id}}', 'close-hapusPelatihanForm{{$pelatihan->id}}')" data-modal-target="hapusPelatihan" data-modal-toggle="hapusPelatihan" type="button" class="buttonHapusPelatihan px-4 py-1 bg-red-500 text-white rounded mx-1 my-1 hover:bg-red-700">Hapus</button>
                        
                            {{-- MODAL HAPUS DATA --}}
                            <div id="hapusPelatihan{{$pelatihan->id}}" tabindex="-1" aria-hidden="true" class="hapusPelatihan fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-hapusPelatihan{{$pelatihan->id}}" type="button" class="close-hapusPelatihan absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Hapus Pelatihan</h3>
                                            <form class="space-y-6" action="{{ url('/hapusPelatihan/'.$pelatihan->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="text-white">
                                                    Apakah Anda yakin ingin menghapus pelatihan?
                                                </div>
                                                <div class="flex justify-center mt-4">
                                                    <button id="close-hapusPelatihanForm{{$pelatihan->id}}" type="button" class="close-hapusPelatihanForm text-white w-36 bg-sky-400 rounded-sm mx-2 hover:bg-sky-600 py-1">Tidak</button>
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
    {{-- END SHOW PELATRIHAN --}}


@endsection
{{-- END CONTENT --}}

@section('javascript')
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
@endsection
@section('footer')