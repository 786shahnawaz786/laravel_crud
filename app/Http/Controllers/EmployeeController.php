<?php

namespace App\Http\Controllers;

use App\Employee;
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
       $employees = Employee::all();

       return view("employee.emp_list",compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employee.emp_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $emp = new Employee();
        $emp->emp_name = $request->emp_name;
        $emp->emp_email = $request->emp_email;
        $emp->emp_pass = $request->emp_pass;
        $emp->save();
        return redirect(url("emp-list"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('employee.emp_update')->with("emp",$emp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $emp = Employee::find($id);
        $emp->emp_name = $request->emp_name;
        $emp->emp_email = $request->emp_email;
        $emp->emp_pass = $request->emp_pass;
        $emp->save();
        return redirect(url("emp-list"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Employee::find($id)->delete();
        return redirect(url("emp-list"));
    }
}
