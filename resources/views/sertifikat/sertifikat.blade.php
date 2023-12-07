@extends('template.template')

@section('nama', 'Sertifikat')

{{-- CONTENT --}}
@section('content')
    <x-notify::notify />
    @notifyJs

    <h1 class="text-3xl font-bold">Sertifikat</h1>

    <button id="buttonTambahSertifikat" onclick="tambahSertifikat()" data-modal-toggle="tambahSertifikat" type="button" class="bg-blue-500 p-2 rounded px-3 text-white font-semibold my-6 hover:bg-blue-800">
        Tambah Sertifikat
    </button>

    {{-- MODAL TAMBAH SERTIFIKAT --}}
    <div id="tambahSertifikat" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-[80%]">
        <div class="relative w-full max-w-md max-h-full">
            {{-- Modal Content --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="close-tambahSertifikat" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Sertifikat</h3>
                    <form class="space-y-6" action="{{ route('tambah-sertifikat') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <select name="id_pelatihan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                @foreach ($pelatihan as $pelatihan)
                                    <option value="{{$pelatihan->id}}">{{$pelatihan->nama_pelatihan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Sertifikat</label>
                            <input type="text" name="nomor_sertifikat" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nomor Sertifikat" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Diterbitkan</label>
                            <input type="date" name="tgl_diterbitkan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Font</label>
                            <select name="font" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                <option value="Times">Times</option>
                                <option value="Helvetica">Helvetica</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran Kertas</label>
                            <select name="ukuran_kertas" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                <option value="A4">A4</option>
                                <option value="Letter">Letter</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Orientasi</label>
                            <select name="orientasi" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                <option value="Landscape">Landscape</option>
                                <option value="Portrait">Portrait</option>
                            </select>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Tanda Tangan</label>
                            <input type="file" name="ttd" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-100 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-200" accept="image/png" required>
                            <p class="text-red-400 mt-1">*Pastikan memilih file dan background yang benar karena tidak dapat diubah</p>

                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Background</label>
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <td>
                                            <input type="radio" name="id_template" id="" value="1" required><label for="1" class="text-white">1</label>
                                        </td>
                                        <td>
                                            <input type="radio" name="id_template" id="" value="2"><label for="2" class="text-white">2</label>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src="https://iili.io/JnoCYOv.jpg" alt="1" height="200px" width="400px">
                                        </td>
                                        <td>
                                            <img src="https://i.ibb.co/6PK8hnG/15186165-5566879.jpg" alt="2" height="200px" width="400px">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
            {{-- End Modal Content --}}
        </div>
    </div>
    {{-- END MODAL TAMBAH SERTIFIKAT --}}


    <div>
        <table id="tabel-data">
            <thead>
                <th>ID</th>
                <th>Nama Pelatihan</th>
                <th>Nomor Sertifikat</th>
                <th>Tanggal Diterbitkan</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                
                @foreach ($sertifikat as $sertifikat)
                <tr>
                    <td>{{$sertifikat->id_sertifikat}}</td>
                    <td>{{$sertifikat['nama_pelatihan']}}</td>
                    <td>{{$sertifikat['nomor_sertifikat']}}</td>
                    <td>{{$sertifikat['tgl_diterbitkan']}}</td>
                    <td>
                        <a href="{{ url('sertifikat/detailSertifikat?id='.$sertifikat->id_sertifikat)}}" class="px-4 py-1 bg-orange-400 text-white rounded mx-1 my-1 hover:bg-orange-600">Lihat</a>

                        <button id="buttonEditSertifikat{{$sertifikat->id_sertifikat}}" onclick="editPelatihan('editSertifikat{{$sertifikat->id_sertifikat}}', 'buttonEditSertifikat{{$sertifikat->id_sertifikat}}', 'close-editSertifikat{{$sertifikat->id_sertifikat}}')" data-modal-target="editPelatihan" data-modal-toggle="editPelatihan" type="button" class="px-4 py-1 bg-sky-400 text-white rounded mx-1 my-1 hover:bg-sky-600">Edit</button>
                            {{-- MODAL EDIT DATA --}}
                            <div id="editSertifikat{{$sertifikat->id_sertifikat}}" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-editSertifikat{{$sertifikat->id_sertifikat}}" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Sertifikat</h3>
                                            <form class="space-y-6" action="{{ url('/editSertifikat/'.$sertifikat->id_sertifikat) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <div>
                                                    <select name="id_pelatihan" disabled class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                                        <option value="{{$sertifikat->id_pelatihan}}" selected>{{$sertifikat->nama_pelatihan}}</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Sertifikat</label>
                                                    <input type="text" value="{{$sertifikat->nomor_sertifikat}}" name="nomor_sertifikat" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Masukkan Nomor Sertifikat" required>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Diterbitkan</label>
                                                    <input type="date" value="{{$sertifikat->tgl_diterbitkan}}" name="tgl_diterbitkan" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Font</label>
                                                    <select name="font" value="{{$sertifikat->font}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                                        <option value="{{$sertifikat->font}}" selected disabled hidden class="selected">
                                                            {{$sertifikat->font}}
                                                        </option>
                                                        <option value="Times" >Times</option>
                                                        <option value="Helvetica">Helvetica</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ukuran Kertas</label>
                                                    <select name="ukuran_kertas" value="{{$sertifikat->ukuran_kertas}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                                        <option value="{{$sertifikat->ukuran_kertas}}" selected disabled hidden>
                                                            {{$sertifikat->ukuran_kertas}}
                                                        </option>
                                                        <option value="A4">A4</option>
                                                        <option value="Letter">Letter</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Orientasi</label>
                                                    <select name="orientasi" id="" value="{{$sertifikat->orientasi}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  required>
                                                        <option value="{{$sertifikat->orientasi}}" selected disabled hidden>
                                                            {{$sertifikat->orientasi}}
                                                        </option>
                                                        <option value="Landscape">Landscape</option>
                                                        <option value="Portrait">Portrait</option>
                                                    </select>
                                                </div>

                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- End Modal Content --}}
                                </div>
                            </div>
                            {{-- END MODAL EDIT DATA --}}

                        <button id="buttonHapusSertifikat{{$sertifikat->id_sertifikat}}" onclick="hapusPelatihan('hapusSertifikat{{$sertifikat->id_sertifikat}}', 'buttonHapusSertifikat{{$sertifikat->id_sertifikat}}', 'close-hapusSertifikat{{$sertifikat->id_sertifikat}}', 'close-hapusSertifikat{{$sertifikat->id_sertifikat}}')" data-modal-target="hapusSerifikat" data-modal-toggle="hapusSerifikat" type="button" class="px-4 py-1 bg-red-500 text-white rounded mx-1 my-1 hover:bg-red-700">Hapus</button>
                        
                            {{-- MODAL HAPUS DATA --}}
                            <div id="hapusSertifikat{{$sertifikat->id_sertifikat}}" tabindex="-1" aria-hidden="true" class="hapusPelatihan fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    {{-- Modal Content --}}
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button id="close-hapusSertifikat{{$sertifikat->id_sertifikat}}" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="px-6 py-6 lg:px-8">
                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Hapus Sertifikat</h3>
                                            <form class="space-y-6" action="{{ url('/hapusSertifikat/'.$sertifikat->id_sertifikat) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="text-white">
                                                    Apakah Anda yakin ingin menghapus sertifikat?
                                                </div>
                                                <div class="flex justify-center mt-4">
                                                    <button id="close-hapusPelatihanForm{{$sertifikat->id_sertifikat}}" type="button" class="text-white w-36 bg-sky-400 rounded-sm mx-2 hover:bg-sky-600 py-1">Tidak</button>
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