<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Author;
use App\Category;
use App\Journal;
use App\JournalCategory;
use App\ArticleCategory;
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
        return view('backend.articles.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Article $article, Request $request)
    {
        $article_category = ArticleCategory::all();
        $journal = Journal::all();
        $category = Category::all();
        $author = Author::all();
       
        return view('backend.articles.create', compact('article', 'author', 'journal'));
        
    }

   
    public function store(StoreArticle $request)
    {
        $article = Article::create($request->validated());
        // dd($article);

        $request1 = request();
        
        $article_id = Article::orderBy('id', 'desc')->first();
        foreach($request1->article_categories as $key => $categories){
            $article_categories = new Articlecategory();
            $article_categories->article_id = $article_id->id;
            $article_categories->category_id = $request1->article_categories[$key];
            $article_categories->save();   
        }
        // dd($article_categories);

        return redirect('articles');
    }

    public function selectAjax(Request $request)
    {
        $journal_id = Input::get('journal_id');
        $categories = DB::table('categories')
            ->join('journal_categories', 'journal_categories.category_id', 'categories.id')
            ->select('categories.name', 'categories.id')
            ->where('journal_categories.journal_id', $journal_id)
            ->groupBy('categories.id')
            ->orderBy('categories.name', 'asc')
            ->get();
     
      return response()->json($categories);
       
    }
   
    public function show(Article $article)
    {

        $article_categories = ArticleCategory::where('article_id', $article->id)->get();
        return view('backend.articles.show', compact('article', 'article_categories'));
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
        return redirect('articles');
    }
}
