@extends('layout.aiss')
@section('content')
<title>UASS</title>
<link rel="stylesheet" href={{asset('css/sya.css')}}>
<h2 class="Jeno">Pendataan Nonton bareng NCT Nation</h2> 
<h3 class="ais">Isi dengan benar yah ^^ </h3> 
<body>
<center>
<form class="renjun" method ="POST" action="/isian/">
    @csrf
    <table class= table border= "1">
    <tr>
    <div class="mb-3 jisung">
        <label for="Nama" class="form-label">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama Kmu!" value="{{Session::get('Nama')}}"> <br>
</div>
<div class="mb-3 jisung">
        <label for="Email" class="form-label">Email:</label>
        <input type="text" id="Email" name="Email" class="form-control" placeholder="Email Kamu!" value="{{Session::get('Email')}}"> <br>
</div>
<div class="mb-3 jisung">
        <label for="WhattsApp" class="form-label">WhattsApp:</label>
        <input type="number" id="WhattsApp" name="WhattsApp" class="form-control" placeholder=" No WhattsApp Kamu!" value="{{Session::get('WhattsApp')}}"> <br>
</div>
<div class="mb-3 jisung">
        <label for="Payment" class="form-label">Payment via:</label>
        <input type="text" id="Payment" name="Payment" class="form-control" placeholder="Payment via Apa?" value="{{Session::get('Payment')}}"> <br>
</div>
<div class="mb-3 jisung">
    <button>submit</button>
</div>
</tr>
</table>
</form>
</center>
</body>
@endsection 