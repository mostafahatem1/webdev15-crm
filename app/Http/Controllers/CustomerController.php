<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\City;

class CustomerController extends Controller
{
    function show($id){
        $cust=Customer::find($id);
        return view('customer.show',compact('cust'));
    }

    function index(){
        $customers=Customer::all();
        return view('customer.list',compact('customers'));
    }
    function create(){
        $cities=City::all();
        return view('customer.new',compact('cities'));
    }
    function store(Request $request){
        ////////// file uploading picture Profile
        $image = $request->file('cimage');
        $ext = $image->getClientOriginalExtension();
        $filename = str_replace(' ','-',strtolower(request('cname'))) . "." .$ext;
        $image->storeAs('/public/profile-pictures\customers',$filename);

        //////////////////////////////
        $c = new Customer();
        $c->name = request('cname');
        $c->image = $filename;
        $c->phone = request('cphone');
        $c->address = request('caddress');
        $c->email = request('cemail');
        $c->city_id = request('ccity');
        $c->save();
        return redirect('/customers');
    }
    function edit($id){
        $cust = Customer::find($id);
        $cities=City::all();
        return view('customer.edit',compact('cust','cities'));
    }
    function update($id){
        $cust = Customer::find($id);
        $cust->name = request('cname');
        $cust->phone = request('cphone');
        $cust->address = request('caddress');
        $cust->email = request('cemail');
        $cust->city_id = request('ccity');
        $cust->save();
        return redirect('/customers');
    }
    function destroy($id){
        $c=Customer::find($id);
        $c->delete();
        return redirect('/customers');
    }
    function search_by_phone(){
        return view('customer.search_by_phone');
    }
    function result_by_phone(){
        $sc = request('sc');
        $customers = Customer::where('phone', $sc)->get();
        return view('customer.search_by_phone',compact('customers'));
    }
    function search_by_name(){
        return view('customer.search_by_name');
    }
    function result_by_name(){
        $sc = request('sc');
        $customers = Customer::where('name',"LIKE", "%$sc%")->get();
        return view('customer.search_by_name',compact('customers'));
    }
    function search_by_field(){
        return view('customer.search_by_field');
    }
    function result_by_field(){
        $sc = request('sc');
        $field= request('field');
        $customers = Customer::where($field,"LIKE", "%$sc%")->get();
        return view('customer.search_by_field',compact('customers'));
    }
    function search_by_all(){
        return view('customer.search_by_all');
    }
    function result_by_all(){
        $sc = request('sc');
        $customers = Customer::where('name',"LIKE", "%$sc%")
                           ->orWhere('phone',"LIKE", "%$sc%")
                           ->orWhere('address',"LIKE", "%$sc%")
                           ->orWhere('email',"LIKE", "%$sc%")
                           ->get();
        return view('customer.search_by_all',compact('customers'));
    }
    function indexTrash(){
        $deleted_cust=Customer::onlyTrashed()->get();
        return view('customer.trash',compact('deleted_cust'));
    }
    function restore($id){
        $c =Customer::onlyTrashed()->find($id);
        $c-> restore();
        return redirect('/customers/deleted');
    }
    function deleteForever($id){
        $c=Customer::onlyTrashed()->find($id);
        $c-> forceDelete();
        return redirect('/customers/deleted');
    }
}
