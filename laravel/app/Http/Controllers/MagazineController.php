<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazine = Magazine::all();
        return view('magazine.index',['magazine'=>$magazine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("magazine.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
        }
        Magazine::create([
            "title"=>$request['title'],
            "body"=>$request['body'],
            "picpath"=>$request['picpath'],
            ]);
            return redirect(route('magazine.index'));
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(Magazine $magazine)
    {
        return view ('magazine.show',['magazine'=>$magazine]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Magazine $magazine)
    {
        return view ("magazine.edit",["magazine"=>$magazine]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magazine $magazine)
    {
        $magazine->update([
            "title"=>$request['title'],
            "body"=>$request['body'],
            "picpath"=>$request['picpath'],
        ]);
        return redirect(route('magazine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
        $magazine->delete();
        return redirect(route('magazine.index'));
    }
}
