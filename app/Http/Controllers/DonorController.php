<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DonorController extends Controller
{
    public function index()
    {
        $donors = Donor::latest()->simplePaginate(5);
        return view('donor.index',['donors' => $donors]);
    }
    public function create()
    {
        return view('donor.create');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|min:3',
            'address' => 'required|min:4',
            'blood_type' => 'required',
            'phone' => ['required','min:11','max:11', Rule::unique('donors','phone')],
            'age' => 'required|min:2|max:2',
            'date' => 'required',
            'gender' => 'required',
            'id_image' => 'required|image'
        ]);
        $attributes['id_image'] = $request->file('id_image')->store('id_image','public');
        Donor::create($attributes);
        return redirect('/donors')->with('success','You Donated Successfully');

    }
    public function admin()
    {
        $donor = Donor::latest()->simplePaginate(3);
        return view('admin.donor',['donors' => $donor]);
    }
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return back()->with('success','Donor Deleted Successfully');
    }


}
