<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aisyaa extends Model
{
    use HasFactory;
   protected $table="aisyaa";
   protected $fillable=['Nama','Email','WhattsApp','Payment'];
}
