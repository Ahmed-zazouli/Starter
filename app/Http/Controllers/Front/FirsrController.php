<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirsrController extends Controller
{
   public function getIndex(){
       $data=[];
       $data['id']=5;
       $data['name']='oussama';
       $obj = new \stdClass();
       $obj ->name="ahmed";
       $obj -> id=5;
       $obj -> gender ='male';
       return view('ahmed',compact('obj'));
   }
}
