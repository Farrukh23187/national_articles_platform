<?php

namespace App\Http\Controllers;

use App\Conference;
use Illuminate\Http\Request;
use App\Article;
use App\Author;
use App\Category;
use App\Journal;
use App\JournalCategory;
use App\ArticleCategory;
use App\ArticleAuthor;
use App\Http\Requests\Article\StoreArticle;
use App\Http\Requests\Article\UpdateArticle;
use DB;
use Illuminate\Support\Facades\Input;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
//        dd($article);
        return view('backend.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article)
    {
        $journal = Journal::all();
        $conference = Conference::all();
        $authors = Author::all();
       
        return view('backend.articles.create', compact('article', 'authors', 'journal', 'conference'));
        
    }

   
    public function store(Request $request)
    {
        // dd($request);
        // $request2 = request();
        $data = request()->validate([
            'name' => 'required|min:4',
            'year' => 'required',
            'key_words' => 'required',
            'annotation' => 'required|min:7',
            'status' => 'required',
            'journal_id' => 'nullable',
            'conference_id' => 'nullable',
            'file' => 'required|max:10000|mimes:doc,docx,pdf,djvu,odt,xlsx'
        ]);
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            if($file->move('files', $name)){
                $article = Article::create($data);
                $this->storeFile($article);
                // dd($article->file);
            }
              
        };

        return redirect()->route('articles.index');
    }

    public function selectAjax(Request $request)
    {
        $journal_id = Input::get('journal_id');
        $conference_id = Input::get('conference_id');

        $categories = DB::table('categories')
            ->join('journal_categories', 'journal_categories.category_id', 'categories.id')
            ->select('categories.name', 'categories.id')
            ->where('journal_categories.journal_id', $journal_id)
//            ->groupBy('categories.id')
            ->orderBy('categories.name', 'asc')
            ->get();
     
            $conf_categories = DB::table('categories')
            ->join('conference_categories', 'conference_categories.category_id', 'categories.id')
            ->select('categories.name', 'categories.id')
            ->where('conference_categories.conference_id', $conference_id)
//            ->groupBy('categories.id')
            ->orderBy('categories.name', 'asc')
            ->get();
      return response()->json([
          'categories' => $categories,
          'conf_categories' => $conf_categories
      ]);
       
    }
   
    public function show(Article $article)
    {

        $article_categories = ArticleCategory::where('article_id', $article->id)->get();
        $article_authors = ArticleAuthor::where('article_id', $article->id)->get();
        return view('backend.articles.show', compact('article', 'article_categories', 'article_authors'));
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
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }

    private function storeFile($article){
        
            $article->update([
                'file' => request()->file('file')->getClientOriginalName(),
            ]);
           
        
    }
}
