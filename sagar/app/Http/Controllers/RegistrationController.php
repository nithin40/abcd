<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
  // public function index(Request $request)

  // {
  //   $data=['name'=>$request->post('name'),'email'=>$request->post('email')];
  //   // print_r($data);
  //   DB::table('reg')->insert($data);
  //   echo "data inserted successfully";
  // }

public function fet()
{
  $user=Capital::all();
   return view('table',['users'=>$user]);
}

public function del($name)
{


Capital::wherename($name)->delete();
return redirect()->back();


  // return view('form');


  // $cust=From::All();
  // print_r($cust);
  // return view('table');
}

public function up($name)
{

$data=Capital::wherename($name)->get();
return view('table1',['nithin'=>$data]);


}

public function upd1(Request $request){
  
  $name=$request->post("name");
  $email=$request->post("email");
  
  

  Capital::Where("name",$name)->update(["email"=>$email]);
  // // echo "<pre>";
  // // print_r($data);
  echo "data updated successfully";





}

public function store(Request $request)
{
  $data=$data=['name'=>$request->post('name'),'email'=>$request->post('email')];
  // print_r($data);
  DB::table('reg')->insert($data);
  return response()->json(['success'=>true]);
}

}