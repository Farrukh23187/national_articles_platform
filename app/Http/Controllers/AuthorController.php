<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author  = Author::all();

        return view('authors.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = new Author();

        return view('authors.create', compact('author'));
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
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|min:7',
            'organization' => 'required',
            'academic_title' => 'required',
        ]);

        Author::create($data);
//        $request->photo->storeAs('public', $request->photo->getClientOriginalName());
//        $img_name = $request->photo->getClientOriginalName();
//
//
//        $author = new Company();
//        $author->first_name = request('first_name');
//        $author->last_name = request('last_name');
//        $author->email = request('email');
//        $author->website = request('phone');
//
//        $company->logo = $img_name;
//        $company->save();
        // Company::create($data);
        return redirect('authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
