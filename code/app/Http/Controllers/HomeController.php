<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $home=Home::first();
        return view('backend.home.index',compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $home=new Home();
       $home->title=$request->title;
       $home->description=$request->description;
       $home->price=$request->price;
       if($request->hasFile('image')){
        $file=$request->image;
        $newName=time() . $file->getClientOriginalName();
        $file->move("images",$newName);
        $home->image="images/$newName";
       }

       $home->save();
       return redirect('/home');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home=Home::find($id);
        return view('backend.home.show',compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home=Home::find($id);
        return view('backend.home.edit',compact('home'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $home=Home::find($id);
       $home->title=$request->title;
       $home->description=$request->description;
       $home->price=$request->price;
       if($request->hasFile('image')){
        $file=$request->image;
        $newName=time() . $file->getClientOriginalName();
        $file->move("images",$newName);
        $home->image="images/$newName";
       }

       $home->update();
       return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home=Home::find($id);
        $home->delete();
        return redirect('/home');
    }
}
