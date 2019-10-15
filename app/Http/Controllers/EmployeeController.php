<?php

namespace App\Http\Controllers;
use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Company;
class EmployeeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();
        $employee = Employee::all();
        // dd($employee);
        return view('employees.index', compact('employee', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        $employee = new Employee();
        return view('employees.create', compact('employee', 'company'));
    }

    public function search(Request $request){
        // $name = new Company();
        $company = Company::all();
        $search = $request->get('search');
        // dd($search);
        $name = DB::table('companies')->where('id', '=', $search)->get();

        $employee = DB::table('employees')->where('company_id', '=', $search)->paginate(2);
        // dd($name);
    return view('employees.search', compact('employee', 'company', 'name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company_id' => 'required'
        ]);
            
        Employee::create($data);
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $company = Company::all();
        return view('employees.edit', compact('employee', 'company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company_id' => 'required'
        ]);
                       
        $employee->update($data);
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('employees');
    }
}
