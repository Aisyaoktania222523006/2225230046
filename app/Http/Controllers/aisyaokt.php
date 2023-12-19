<?php

namespace App\Http\Controllers;
use App\Models\aisyaa;
use Illuminate\Http\Request;

class aisyaokt extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = aisyaa::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'Email'=>'required',
            'WhattsApp'=>'required|numeric',
            'Payment'=>'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Email'=> $request->input('Email'),
            'WhattsApp'=> $request->input('WhattsApp'),
            'Payment'=> $request->input('Payment')
        ];
        aisyaa::create($data);
        redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = aisyaa::where('Nama', $id)->first();
        return view('isian.edit')->with('data',$data);
    } 
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama'=>'required',
            'Email'=>'required',
            'WhattsApp'=>'required|numeric',
            'Payment'=>'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'Email'=> $request->input('Email'),
            'WhattsApp'=> $request->input('WhattsApp'),
            'Payment'=> $request->input('Payment') ,
        ];
        aisyaa::where('Nama',$id)->update($data);
        return redirect('/isian')->with('succes','Data berhasil di eupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        aisyaa::where('Nama',$id)->delete();
        return redirect('/isian')->with('succes','Data berhasil di Hapus!');
    
    }

}