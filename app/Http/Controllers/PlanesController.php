<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plane;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPlanes = Plane::all();
        return view('planes.index', compact('allPlanes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $this->validate(request(), [
            'body' => 'required|min:2|max:1000',
        ]);

        Plane::create([
            'body' => request('body'),
            'active' => (request('active') == 'on') ? true : false
        ]);

//        Plane::create([
//            'body' => request('body'),
//            'active' => (request('active') == 'on') ? true : false
//        ]);

//        dd(request()->all());

//        $active = (request('active') == 'on') ? true : false;
//
//        $plane = new Plane();
//        $plane->body = request('body');
//        $plane->active = $active;
//        $plane->save();

        return redirect('/planes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plane $plane)
    {
        return view('planes.show', compact('plane'));
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
