<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;

class storedata extends Controller
{
    public function index(){
        $cus = new customers;
        $title = "new registration";
        $url = url('/customerform');
        $data = compact('cus','title','url');
        return view('customerform')->with($data);
    }
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
        $customer = new customers;
        $customer->FullName = $request['FullName'];
        $customer->Address = $request['Address'];
        $customer->state = $request['state'];
        $customer->Country = $request['Country'];
        $customer->Age = $request['Age'];
        $customer->Product = $request['Product'];
        $customer->save();
        echo "insert data sucessfully";
    }
}
