@extends('user.template')

@section('title', 'Pelatihan')

@section('content')
    @foreach ($pelatihan as $pelatihan)      
    @endforeach
    
    <h1 class="text-3xl font-bold">{{$pelatihan->nama_pelatihan}}</h1>

    <div class="flex justify-center mb-3">
        <table class="w-[50%] shadow-md">
            <thead class="bg-cyan-500 text-white">
                <tr>
                    <th>Nama</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Pelatihan</td>
                    <td>{{$pelatihan->nama_pelatihan}}</td>
                </tr>
                <tr>
                    <td>Nama Penyelenggara</td>
                    <td>{{$pelatihan->nama_penyelenggara}}</td>
                </tr>
                <tr>
                    <td>Tanggal Mulai</td>
                    <td>{{$pelatihan->tgl_mulai}}</td>
                </tr>
                <tr>
                    <td>Tanggal Selesai</td>
                    <td>{{$pelatihan->tgl_selesai}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table id="tabel-data">
            <thead>
                <th>Nama Materi</th>
                <th>JPL</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach ($materi as $item)
                    <tr>
                        <td>{{$item->nama_materi}}</td>
                        <td>{{$item->jpl}}</td>
                        <td>
                            <a href="{{ url('/detailPelatihanUser?id='.$item->id) }}" class="px-4 py-1 bg-sky-400 text-white rounded mx-1 my-1 hover:bg-sky-600">Lihat Materi</a>
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
        $('#tabel-data').DataTable();
    });
</script>
@endsection