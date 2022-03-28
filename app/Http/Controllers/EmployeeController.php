<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeValidation;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee',['employees' => Employee::orderBy('id','desc')->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeValidation $request)
    {
        $employee = new Employee();
        $input = $request->only('firstname','lastname','email','phone');

        $employee->create([
            'first_name' => $input['firstname'],
            'last_name' => $input['lastname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
        ]);

        return redirect()->back()->with('message',"Employee Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeValidation $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $input = $request->only('firstname','lastname','email','phone');
        $employee->update([
            'first_name' => $input['firstname'],
            'last_name' => $input['lastname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
        ]);

        return redirect()->back()->with('message',"Employee Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();

        return redirect()->back()->with('message',"Employee Deleted");
    }
}
