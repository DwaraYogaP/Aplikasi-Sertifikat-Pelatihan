<?php
 $id = $_GET['id']
?>

@extends('template.template')

@section('nama', 'Detail Pelatihan '.$id)

@section('content')
    @foreach ($pelatihan as $pelatihan)
        <h1 class="text-3xl font-bold">{{$pelatihan['nama_pelatihan']}}</h1>
    @endforeach
    
    @foreach ($dataPelatihan as $item)
    <div>
        <span class="">
            <h1 class="text-3xl font-bold mb-3">{{$item->nama_materi}}</h1>
        </span>
    </div>
    <div>
        <label for="">Jam Pelatihan</label>
        <span class="inline-block">
            <h2 class="text-xl font-semibold">{{$item->jpl}}</h2>
        </span>
    </div>
    <div>
        <label for="">Deskripsi :</label>
        <div class="w-full bg-slate-600 text-white p-5 rounded-lg">
            <h2 class="text-lg">{{$item->deskripsi}}</h2>
        </div>
    </div>
    @endforeach
@endsection