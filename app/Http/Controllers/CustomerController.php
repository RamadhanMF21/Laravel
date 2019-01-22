<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    function index() {
      //echo "Asoy geboy";
      $customer = Customer ::get(['customer_id',
      'name',
      'address']);
      //var_dump($customer);
      return view('customer.index', compact('customer'));
    }

    function create() {
      //echo "telo";
      return view('customer.create');
    }

    public function store(Request $request){
      //echo "coba";
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');

      echo $txtId." <br />".$txtName." <br />".$txtAddress;

      Customer ::create([
        'customer_id' =>$txtId,
        'name' =>$txtName,
        'address' =>$txtAddress
      ]);
      return redirect('/Customer');
    }

    public function show($id) {
      //return view('Customer/show',
      //['Customer' => Customer ::where('customer_id',$id)]
      $customer = Customer ::where('customer_id',$id)->get();
      return view('Customer/show',compact('customer'));
    }

    public function edit($id){
      $customer = Customer ::where('customer_id',$id)->get();
      return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, $id){
      $txtId = $request->input('txt_id');
      $txtName = $request->input('txt_name');
      $txtAddress = $request->input('txt_address');
      echo $txtId. "<br />".$txtName."<br />".$txtAddress;
      Customer ::where('customer_id', $id)->update([
        'name'=>$txtName,
        'address'=>$txtAddress
      ]);
      return redirect('Customer');
    }

    public function destroy($id){
      $customer = Customer ::where('customer_id',$id)->first();
      $customer->delete();
      return redirect('/Customer');
    }
}
