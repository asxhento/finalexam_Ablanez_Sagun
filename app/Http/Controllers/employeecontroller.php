<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\employeemngt;

class employeecontroller extends Controller
{
    public function index()
    {   
        return view ('employee.index');
    }


    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'add' => 'required',
            'dob' => 'required',
            'cont' => 'required',
        ]);

       employee::create($request->all());
        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function edit( int $id)
    {
        //
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id){
      //
    }
}
