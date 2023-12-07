@extends('user.template')

@section('title', 'User')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="bg-sky-500 text-white flex justify-center p-1 rounded-sm">
    Login : {{$user->name}}
</div>

    <h1 class="text-3xl font-bold mb-2">{{$user->name}}</h1>   

    @foreach ($result as $item)
    @endforeach
    @foreach ($pelatihan as $item)
    @endforeach

    @foreach ($sertifikat as $item)
    @endforeach

    <div class="mt-4 mb-4 p-3">
        <h2 class="text-xl font-bold">Daftar Pelatihan</h2>
        <table class="tabel-data">
            <thead>
                <th>Nama Pelatihan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($result as $result)
                <tr>
                    <td>{{$result->nama_pelatihan}}</td>
                    <td>{{$result->tgl_mulai}}</td>
                    <td>{{$result->tgl_selesai}}</td>
                    <td>
                        <a href="{{ url('pelatihanUser?id='.$result->id)}}" class="px-4 py-1 bg-sky-400 text-white rounded mx-1 my-1 hover:bg-sky-600">Detail</a>
                        @if ($result->id_sertifikat === null)
                            <a href="URL:void(0)" class=" cursor-not-allowed px-4 py-1 bg-slate-600 opacity-80 text-white rounded mx-1 my-1">Lihat Sertifikat</a>
                        @else
                            <a href="{{ url('/sertifikatUser?id='.$result->id)}}" class=" lihatSertifikat px-4 py-1 bg-cyan-400 text-white rounded mx-1 my-1 hover:bg-cyan-600">Lihat Sertifikat</a>        
                        @endif

                        <script>
                            var a = document.querySelector("lihatSertifikat");
                            if('{{$result->id_sertifikat}}' === null) {
                                a.removeAttribute("href")
                                a.onclick = Swal.fire("Tidak Ada sertifikat");
                            }
                        </script>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('.tabel-data').DataTable();
    });
</script>
@endsection