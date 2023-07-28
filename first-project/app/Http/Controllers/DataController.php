<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_table;
use App\Traits\DateTrait;

class DataController extends Controller
{
    use DateTrait;
    function DataTableIndex(){
        $data=data_table::all();
        
        return view('DataTable',['data'=>$data]);
    }
    function DataUpdateIndex($name){
                // return $name;
                $customerData=data_table::where('name',$name)->get();
                // return $customerData;
                return view('DataUpdate',['cd'=>$customerData]);
    }
    function DataUpdate(Request $request){
         $name= $request->name;
         $name=$request->input('name');
         $phone=$request->input('phone');
         $address=$request->input('address');

         $isUpdatesucess=data_table::where('name',$name)->update(['name'=>$name,'phone'=>$phone,'address'=>$address]);

     if($isUpdatesucess)echo '<h1>update succcess</h1>';
    }

    public function del($name){
        
        data_table::wherename($name)->delete();
        return redirect()->back();
        


        
    }
     public function Dateformat(){

     $date = date("y-m-d h:i:s");
       echo $this->date_Format($date);
     }
        
      }

