<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    function input ($cari)
    {
        // mengambil data dari table pegawai sesuai pencarian data
        $dt = DB::connection('mysql')
        ->table('p_transaction')
        ->select(DB::raw('*'))
        ->where('REFNO','like',"%".$cari."%")
        ->get();
        return $dt;
    }
}

