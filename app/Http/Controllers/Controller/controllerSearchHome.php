<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class controllerSearchHome extends Controller
{
    public function Home(Request $request)
	{
		// menangkap data pencarian
        
        
    	// mengambil data dari table pegawai sesuai pencarian data
		
        // dd($dt);
        // mengirim data pegawai ke view index
		return view('SearchView');
 
	}
}
