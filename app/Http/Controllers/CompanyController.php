<?php

namespace App\Http\Controllers;
use DB;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $company = Company::with('employee')->paginate(10);
        return view('backend.companies.index', compact('company')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = new Company();

        return view('backend.companies.create', compact('company'));
    }

    public function search(Request $request){
        $search = $request->get('search');
        // dd($search);
        $company = DB::table('companies')->where('name', 'like', '%'.$search.'%')->paginate(10);
    return view('backend.companies.index', compact('company'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'website' => 'required',
            'phone' => 'required'
            ]);
        
        // $company = new Company();
        // $company->name = request('name');
        // $company->email = request('email');
        // $company->website = request('website');

        $company->create($data); 
        // Company::create($data);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('backend.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('backend.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.paginate
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'website' => 'required',
        ]);
       
    

    $company->update($data);      
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
