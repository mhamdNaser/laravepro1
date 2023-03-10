<?php

namespace App\Http\Controllers;

use App\Models\Move;
use App\Models\picture;
use Illuminate\Http\Request;

class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moves = Move::all();
        return view('moves.index', ['moves'=>$moves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moves.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Move::create([
        //     'name'          =>$request->name,
        //     'gener'         =>$request->gener,
        //     'description'   =>$request->description
        // ]);

        $move = new Move();
        $move->name = $request->name;
        $move->gener = $request->gener;
        $move->description = $request->description;
        $move->save();


        $Pic = New picture();
        $movie_img = $request->file('movie_pic')->getClientOriginalName();
        $request->file('movie_pic')->storeAs('public/image', $movie_img);
        $Pic->picture_name = $movie_img;
        $Pic->moves_id = $move->id;
        $Pic->save();

        return redirect()->route('moves.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Move  $move
     * @return \Illuminate\Http\Response
     */
    public function show(Move $move)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Move  $move
     * @return \Illuminate\Http\Response
     */
    public function edit(Move $move)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Move  $move
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Move $id)
    {
        $move = Move::findorFail($id);
        $move->title = $request->name;
        $move->content = $request->gener;
        $move->content = $request->description;
        $move->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Move  $move
     * @return \Illuminate\Http\Response
     */
    public function destroy(Move $move)
    {
        //
    }
}
