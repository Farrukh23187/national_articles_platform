<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests\Author\StoreAuthor;
use App\Http\Requests\Author\UpdateAuthor;


class AuthorController extends Controller
{
    public function index()
    {
        $author  = Author::all();

        return view('backend.authors.index', compact('author'));
    }

    public function create()
    {
        $author = new Author();

        return view('backend.authors.create', compact('author'));
    }

    public function store(StoreAuthor $request)
    {
        $author = Author::create($request->validated());
        return redirect('authors');
    }

    public function show(Author $author)
    {
        return view('backend.authors.show', compact('author'));
        
    }

    public function edit(Author $author)
    {
        return view('backend.authors.edit', compact('author'));
    }

    public function update(UpdateAuthor $request, Author $author)
    {
        $author->update($request->validated());
        return redirect()->route('authors.show', ['id' => $author->id]);
    }

    public function destroy($id)
    {
        //
    }
}
