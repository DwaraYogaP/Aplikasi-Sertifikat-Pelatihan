@extends('user.template')

@section('title', 'Materi')

@section('content')
    @foreach ($materi as $materi)
        <h1 class="text-3xl font-bold mb-3">{{$materi->nama_materi}}</h1>

        <h2>Jam Pelatihan : {{$materi->jpl}}</h2>

        <h2 class="text-xl">Deskripsi :</h2>
        <div class="w-full bg-slate-600 text-white p-5 rounded-lg">
            <p>{{$materi->deskripsi}}</p>
        </div>
    @endforeach
@endsection