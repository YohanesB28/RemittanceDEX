<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class BrifastModel extends Model
{
    function getdata ($reff)
    {
        $dt = DB::connection('mysql')
        ->table('p_transaction')
        ->select(DB::raw('*'))
        ->where('REFNO',$reff)
        ->get();
        return $dt;
    }
    function getdataUETR ($reff)
    {
        $dt = DB::connection('mysql')
        ->table('p_transaction')
        ->select(DB::raw('*'))
        ->where('REFNO',$reff)
        ->get();
        return $dt;
    }
    function CariData ($reff)
    {
        $dt = DB::connection('mysql')
        ->table('p_transaction')
        ->select(DB::raw('*'))
        ->where('REFNO','like',"%".$cari."%")
        ->get();
        return $dt;
    }
}
