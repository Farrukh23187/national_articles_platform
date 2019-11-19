<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Company;
use App\JournalType;
use App\Category;
use App\JournalCategory;
class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::all();
        $company = Company::all();
        $journal_category = JournalCategory::all();
        return view('backend.journals.index', compact('journals', 'company', 'journal_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Journal $journals)
    {
        $company = Company::all();
        $category = Category::all();
        $journaltype = JournalType::all();
        $journal_category = JournalCategory::all();
        return view('backend.journals.create', compact('journals', 'journal_category', 'company', 'journaltype', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $journal = request()->validate([
            'name' => 'required',
            'company_id' => 'required',
            'journaltype_id' => 'required',
            ]);
            Journal::create($journal);
            $journal_id = Journal::orderBy('id','desc')->first();
            // dd($journal_id);
            foreach($request->journal_categories as $key => $categories){
                $journal_categories = new JournalCategory();
                $journal_categories->journal_id = $journal_id->id;
                $journal_categories->category_id = $request->journal_categories[$key];
                $journal_categories->save();
                // dd($journal_categories);
            }
            
            // dd($journal_categories);

        return redirect('journals');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        $journal_categories = JournalCategory::where('journal_id', $journal->id)->get();
        return view('backend.journals.show', compact('journal', 'journal_categories'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journals)
    {
        $company = Company::all();
        $category = Category::all();
        $journaltype = JournalType::all();
        $journal_category = JournalCategory::all();
        return view('backend.journals.edit', compact('journals', 'journal_category', 'company', 'journaltype', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        $journal = request()->validate([
            'name' => 'required',
            'company_id' => 'required',
            'journaltype_id' => 'required',
            ]);
            Journal::update($journal);
           
            // dd($journal_id);
            foreach($request->journal_categories as $key => $categories){
                $journal_categories = new JournalCategory();
                $journal_categories->journal_id = $journal->id;
                $journal_categories->category_id = $request->journal_categories[$key];
                $journal_categories->save();
                // dd($journal_categories);
            }
            
            // dd($journal_categories);

        return redirect()->route('journals.show', ['id' => $journal->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
