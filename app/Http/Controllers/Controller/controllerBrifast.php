<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrifastModel;
class controllerBrifast extends Controller
{
    function __construct(BrifastModel $Brifast)
    {
        $this->brifast = $Brifast;
    }
    function getdata()
    {

        // $search = htmlspecialchars($_POST['search']);
        $data =$this->brifast->getdata(190802000021703);
        // print_r($data);die;
        $data['data']=json_encode($data[0]);
        
        return view('BrifastView', $data);
        // print_r(json_encode($data));
    }
}
