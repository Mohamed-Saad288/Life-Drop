<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:4',
            'blood_type' => 'required',
            'phone' => ['required','min:11','max:11'],
            'age' => 'required|min:2|max:2',
            'gender' => 'required',
            'reason' => 'required|min:3',
             'amount' => 'required',
            'id_image' => 'required|image'
        ]);
        $attributes['id_image'] = $request->file('id_image')->store('customer_id','public');
        Customer::create($attributes);
        return redirect('/donors')->with('success','Your information has been registered successfully. Wait for a message');

    }
    public function admin()
    {
        $customer = Customer::latest()->simplePaginate(5);
        return view('admin.customer',['customers' => $customer]);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return back()->with('success','Customer Deleted Successfully');
    }

}
