@extends('layout.aiss')
@section('content')
<title>UASS</title>
<link rel="stylesheet" href={{asset('css/sya.css')}}>
<body>
<h2 class="Jeno">Rekap Data Nonton Bareng NCT Nation</h2>
<center>
<a class= " ais" href="/">Tambah data</a>
<table class= table border= "1" cellpadding="10" cellspascing="0">
    <thead> 
        <tr class= "nono">
            <th>Nama</th>
            <th>Email</th>
            <th>WhattsApp</th>
            <th>Payment</th>
            <th>Aksi</th>
        </tr>
    </thead> 
    <tbody>
        @foreach ($data as $item)
        <tr class= "nono">
            <td>{{$item->Nama}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->WhattsApp}}</td>
            <td>{{$item->Payment}}</td>
            <td>
                <a class='btn-e okt' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a> 
                <form class= 'hps' onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{url('/isian/'.$item->Nama)}}"method="POST">
                 @csrf
                 @method('DELETE')
                <button class="btn-h">Hapus</button> </form>
            </td>
        </tr> 
       @endforeach
    </tbody>
    </table>
</center>
</body>
<h3 class="oki">Terimakasih sudah ikut berpartisipasi dalam event ini ^^</h3>
    @endsection