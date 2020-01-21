<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieControllerAdv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Render a list of a resource
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));  //return view file movies.blade.php

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    //shows a view to create a noew resource
    {
        return view('movies-store');  //forse più senso chiamare file movies.create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store() //old vers
    // {
    //     dd(request(['title', 'year', 'overview'])); // test  dd(request()->all()); //not secure
    //     $movie = new Movie();
    //     $movie->title = request('title');
    //     $movie->year = request('year');
    //     $movie->overview = request('overview');
    //     $movie->save();
    //     return redirect('movies');
    // }
    public function store(Request $request) //persist the new resource
    {
        // return $request;
        $validateData = $request -> validate([  // request()->validate([...])
            'title' => 'required',
            'year' => 'required|numeric',
            'overview' => 'required'
        ]);         // return $validateData     // for test

        $movie = Movie::create($validateData);  // Movie::create($validateData);
        return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)   //show a single resource
    {
        // return $id;
        $movie = Movie::findOrFail($id);
        return view('movies-show', compact('movie'));
        // return view('movies-show', ['movie' => $article]);
    }
    // public function show(Movie $movie) //automatically fetch Movie with that id, improved vers return json
    // {
    //     return $movie;
    //     // return view('movies-show', compact('movie'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)   //show a view to edit a single resource
    {
        $movie = Movie::findOrFail($id);
        return view('movies-edit', compact('movie'));

    }
    // public function edit(Movie $movie) // adv version
    // {
    //     return view('movies-edit', compact('movie'));

    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)   //persist the edited resource
    {
        $validateData = $request -> validate([
            'title' => 'required',
            'year' => 'required|numeric',
            'overview' => 'required'
        ]);
        
        $movie = Movie::findOrFail($id);
        $movie->update($validateData);
        return redirect('movies');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    //delete the resource
    {
        $movie = Movie::findOrFail($id);
        $movie -> delete();
        return redirect('movies');

    }
    // public function destroy(Movie $movie) //improv vers
    // {
    //     $movie -> delete();
    //     return redirect('movies');

    // }
}
