<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form;
class formcontroller extends Controller
{
   public function addform(){
       return view('add_form');
   }
  
   public function createform(Request $request){
$form=new form();
if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
   return "Invalid email format";
 }
 if(strlen($request->pincode)<6){
    return "pincode must be exactly 6 digits";
 }
$forms=form::where('email',$request->email)->first();
if(!empty($forms)){
   return "you already registered";
}else{
$form->name=$request->name;
$form->email=$request->email;
$form->pincode=$request->pincode;
$form->save();
return "Registration successfull";
   }
}
}
