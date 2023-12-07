@extends('template.template')

@section('nama', 'Beranda')

{{-- CONTENT --}}
@section('content')

    <h1 class="text-3xl font-bold">Beranda</h1>


    <div class="bg-slate-500 w-full text-white p-2">
        <h1>Selamat Datang di Aplikasi Sertifikat Pelatihan</h1>
    </div>
    <button id="buttonTambahUser" onclick="tambahUser()" data-modal-toggle="tambahUser" type="button" class="bg-blue-500 p-2 rounded px-3 text-white font-semibold my-6 hover:bg-blue-800">
        Tambah User
    </button>

    {{-- MODAL TAMBAH USER --}}
    <div id="tambahUser" tabindex="-1" aria-hidden="true" class="fixed translate-x-1/3 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            {{-- Modal Content --}}
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button id="close-tambahUser" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah User</h3>
                    <form class="space-y-6" action="{{ route('tambah-user') }}" method="POST">
                        @csrf
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="text" name="password" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="name" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        <div>
                            <input type="hidden" name="role" value="user">
                        </div>
                        

                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                    </form>
                </div>
            </div>
            {{-- End Modal Content --}}
        </div>
    </div>
    {{-- END MODAL TAMBAH USER --}}

    <div class="flex gap-4">
        <a href="/sertifikat" class="max-w-[220px] bg-slate-500 aspect-video rounded-md border border-gray-200 flex my-2">
            <div class="w-14 aspect-square bg-sky-500 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" width="30" height="30" viewBox="0 0 24 24"><path d="M16.999 23V7c0-1.103-.897-2-2-2h-8c-1.103 0-2 .897-2 2v16l6-3.601 6 3.601z"></path><path d="M15.585 3h1.414c1.103 0 2 .897 2 2v10.443l2 2.489V3c0-1.103-.897-2-2-2h-8c-1.103 0-2 .897-2 2h6.586z"></path></svg>
            </div>
            <div class="flex  flex-col justify-center p-3 text-lg text-white">
                <p>
                    Total Data Sertifikat
                </p>
                <p class="font-bold">
                    {{$countSertifikat}}
                </p>
            </div>
        </a>
        <div href="#" class="max-w-[220px] bg-slate-500 aspect-video rounded-md border border-gray-200 flex my-2">
            <div class="w-14 aspect-square bg-sky-500 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" width="30" height="30" viewBox="0 0 24 24"><circle cx="7.499" cy="9.5" r="1.5"></circle><path d="m10.499 14-1.5-2-3 4h12l-4.5-6z"></path><path d="M19.999 4h-16c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-16 14V6h16l.002 12H3.999z"></path></svg>
            </div>
            <div class="flex  flex-col justify-center p-3 text-lg text-white">
                <p>
                    Total Template Background
                </p>
                <p class="font-bold">
                    {{$countTemplate}}
                </p>
            </div>
        </div>
        <div href="#" class="max-w-[220px] bg-slate-500 aspect-video rounded-md border border-gray-200 flex my-2">
            <div class="w-14 aspect-square bg-sky-500 flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" width="30" height="30" viewBox="0 0 24 24"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM8.715 8c1.151 0 2 .849 2 2s-.849 2-2 2-2-.849-2-2 .848-2 2-2zm3.715 8H5v-.465c0-1.373 1.676-2.785 3.715-2.785s3.715 1.412 3.715 2.785V16zM19 15h-4v-2h4v2zm0-4h-5V9h5v2z"></path></svg>
            </div>
            <div class="flex  flex-col justify-center p-3 text-lg text-white">
                <p>
                    Total Peserta
                </p>
                <p class="font-bold">
                    {{$countPeserta}}
                </p>
            </div>
        </div>
    </div>
    
    <div>
        <table id="tabel-data">
            <thead>
                <th>Pelatihan</th>
                <th>Peserta</th>
            </thead>
            <tbody>
                @foreach ($peserta as $item)
                    <tr>
                        <td>{{$item->nama_pelatihan}}</td>
                        <td>{{$item->jml_peserta}}</td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('javascript')

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

    
@endsection
{{-- END CONTENT --}}
