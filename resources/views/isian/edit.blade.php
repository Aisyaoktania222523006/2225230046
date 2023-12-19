@extends('layout.aiss')
@section('content')
<title>UASS</title>
<link rel="stylesheet" href={{asset('css/sya.css')}}>
<h2 class="Jeno">Edit Pendataan Nnton Bareng NCT Nation</h2>
<body>
<center>
<form class = "renjun" method="POST" action="{{'/isian/'.$data->Nama}}">
    @method('put') 
    @csrf
    <table class= jaemin border="1">
    <div class="mb-3 mark">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{$data->Nama}}"> 
</div>
<div class="mb-3 mark">
        <label for="Email" class="form-label">Email:</label>
        <input type="text" id="Email" name="Email" class="form-control" placeholder="Email" value="{{$data->Email}}"> 
</div>
<div class="mb-3 mark">
        <label for="WhattsApp" class="form-label">WhattsApp:</label>
        <input type="number" id="WhattsApp" name="WhattsApp" class="form-control" placeholder="WhattsApp" value="{{$data->WhattsApp}}"> 
</div>
<div class="mb-3 mark">
        <label for="Payment" class="form-label">Payment via:</label>
        <input type="text" id="Payment" name="Payment" class="form-control" placeholder="Payment via" value="{{$data->Payment}}"> 
</div>
<div class="mb-3 mark">
    <button>Edit</button><a class= "btn btn-secondry" href="/isian/">Kembali</a>
</div>
</table>
</form>
</center>
</body>
@endsection 