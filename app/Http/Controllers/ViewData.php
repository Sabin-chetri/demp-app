<?php

namespace App\Http\Controllers;
use App\Models\customers;
use Illuminate\Http\Request;

class ViewData extends Controller
{
    public function viewData(){
        $customer = customers::all();
        $data = compact('customer');
        return view('viewdata')->with($data);
    }
}
