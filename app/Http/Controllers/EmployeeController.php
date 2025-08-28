<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){   
        $employees = Employee::all(); 
        return view('employee.list',compact('employees'));
    }

    public function create_form(){
        return view('employee.create');
    }

    public function create(Request $req){
        $validated = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|string|max:13',
            'position' => 'nullable|string|max:255',
        ]);

        Employee::create($validated);

        return redirect('/create')->with('success', 'Employee Created successfully');
    }

    public function get_employee($id){
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $req, $id){
        $validated = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,'. $id,
            'phone' => 'required|string|max:13',
            'position' => 'nullable|string|max:255',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update($validated);

        return redirect('/employee/'.$id)->with('success', 'Employee updated successfully');
    }

    public function delete(Request $req)
    {
        $id = $req->id;

        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee_list')->with('success', 'Employee deleted.');
    }

}
