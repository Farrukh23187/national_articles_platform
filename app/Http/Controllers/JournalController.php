<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;
use App\Company;
use App\JournalType;
use App\Category;
use App\JournalCategory;
use DB;
class JournalController extends Controller
{

    public function index()
    {
        $journals = Journal::all();
        $company = Company::all();
        $journal_category = JournalCategory::all();
        return view('backend.journals.index', compact('journals', 'company', 'journal_category'));
    }

    public function create(Journal $journal)
    {
        $company = Company::all();
        $category = Category::all();
        $journaltype = JournalType::all();
        $journal_category = JournalCategory::all();
        return view('backend.journals.create', compact('journal', 'journal_category', 'company', 'journaltype', 'category'));
    }

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

        return redirect()->route('journals.index');

    }

    public function show(Journal $journal)
    {
        $journal_categories = JournalCategory::where('journal_id', $journal->id)->get();
        return view('backend.journals.show', compact('journal', 'journal_categories'));
        
    }

    public function edit(Journal $journal)
    {
        $company = Company::all();
        $category = Category::all();
        $journaltype = JournalType::all();
        $journal_category = JournalCategory::where('journal_id', '!=', $journal->id)->get();
        return view('backend.journals.edit', compact('journal', 'journal_category', 'company', 'journaltype', 'category'));
    }

    public function update(Request $request, Journal $journal)
    {
        $data = request()->validate([
            'name' => 'required',
            'company_id' => 'required',
            'journaltype_id' => 'required',
            ]);
            
            $journal->update($data);
            // dd($journal_id);
            if($request->journal_categories){
                foreach($request->journal_categories as $key => $categories){
                    $journal_categories = new JournalCategory();
                    $journal_categories->journal_id = $journal->id;
                    $journal_categories->category_id = $request->journal_categories[$key];
                    $journal_categories->save();
                    // dd($journal_categories);
                }
            }

        return redirect()->route('journals.show', ['id' => $journal->id]);
    }

    public function destroy(Journal $journal)
    {
        $journal->delete();
        return redirect()->route('journals.index');
    }
}
