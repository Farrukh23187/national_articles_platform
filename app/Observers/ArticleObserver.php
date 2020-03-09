<?php

namespace App\Observers;
use App\Article;
use App\ArticleAuthor;
use App\ArticleCategory;

class ArticleObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(Article $article)
    {
        // dd($request->article_authors);
        foreach(request()->article_authors as $key => $authors){
            $article_authors = new ArticleAuthor();
            $article_authors->article_id = $article->id;
            $article_authors->author_id = request()->article_authors[$key];
            $article_authors->save();
//             dd($article_authors);
        }

        foreach(request()->article_categories as $key => $categories){
            $article_categories = new ArticleCategory();
            $article_categories->article_id = $article->id;
            $article_categories->category_id = request()->article_categories[$key];
            $article_categories->save();
        }
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleting(Article $article)
    {
        //
    }
}