<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;

class registration extends Controller
{
    public function index(){
        return view('form');
    }
    public function display(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed',
                'password_confirmation'=>'required'
            ]
            );
        echo "<pre>";
        print_r($request->all());
    }
    public function delete($id){
        customers::find($id)->delete();
        return redirect()->back();
        // echo $id;
    }
    public function edit($id){
        $cus = customers::find($id);
        $url = url('/edit').'/'.$id;
        $title = 'update registration';
        $data = compact('cus','url','title');
        return view('customerform')->with($data);
    }
    public function abcde($id, Request $request){
        $custo = customers::find($id);
        $custo->FullName = $request['FullName'];
        $custo->Address = $request['Address'];
        $custo->state = $request['state'];
        $custo->Country = $request['Country'];
        $custo->Age = $request['Age'];
        $custo->Product = $request['Product'];
        $custo->save();
        echo "Updated data sucessfully";
    }
}
