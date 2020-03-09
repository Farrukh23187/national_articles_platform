<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;
use App\Company;
use App\ConferenceTypes;
use App\Category;
use App\ConferenceCategory;
use DB;
class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conference::all();
        $company = Company::all();
        $conference_category = ConferenceCategory::all();
        return view('backend.conferences.index', compact('conferences', 'company', 'conference_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Conference $conference)
    {
        $company = Company::all();
        $category = Category::all();
        $conferencetype = ConferenceTypes::all();
        $conference_category = ConferenceCategory::all();
        return view('backend.conferences.create', compact('conference', 'conference_category', 'company', 'conferencetype', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $conference = request()->validate([
            'name' => 'required',
            'company_id' => 'required',
            'conferencetype_id' => 'required',
            'date' => 'required'
            ]);
            conference::create($conference);
            $conference_id = Conference::orderBy('id','desc')->first();
            // dd($conference_id);
            foreach($request->conference_categories as $key => $categories){
                $conference_categories = new ConferenceCategory();
                $conference_categories->conference_id = $conference_id->id;
                $conference_categories->category_id = $request->conference_categories[$key];
                $conference_categories->save();
                // dd($conference_categories);
            }
            
            // dd($journal_categories);

        return redirect()->route('conferences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Conference $conference)
    {
        $conference_categories = ConferenceCategory::where('conference_id', $conference->id)->get();
        return view('backend.conferences.show', compact('conference', 'conference_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('conferences.index');
    }
}
