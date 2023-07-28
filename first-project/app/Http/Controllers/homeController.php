<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\data_table;

class homeController extends Controller
{
    function homeIndex(){
        return view('home');
    }
    function DataInsert(Request $request)
    {
        $name = $request->input('name');
        $phone= $request->input('phone');
        $address = $request->input('address');

        $isInsertSuccess = data_table::insert(['name'=>$name,'phone'=>$phone,'address'=>$address]);

        if($isInsertSuccess) echo '<h1>insert sucess</h1>';
        



    }
     
    }




