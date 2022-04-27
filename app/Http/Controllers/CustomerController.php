<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;

class CustomerController extends Controller
{
    
    public function add_customer()
    {
        $mobile = new Mobile();
        $mobile->model = 'realme 8';

        $customer =new Customer();
        $customer->name="deepak";
        $customer->email="deepak@gmail.com";

        $customer->save();

        $customer->mobile()->save($mobile);
    }

    public function show_mobile($id)
    {
        $mobile = Customer::find($id)->mobile;
        return view('mobile',['mobile'=>$mobile]);
    }
}
