<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::all();
        return view('pages.customers.index', compact('customer'));
    }

    public function destroy($id){
        $customer = Customer::where('id',$id)->firstOrFail();
        $customer->delete();
        return redirect()->back();
    }
}