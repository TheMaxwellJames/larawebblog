<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $post=Post::all();

        return view('home.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function upload(Request $request)
    {
         $data=new Post;

         $data->username=Auth::user()->name;

         $data->description=$request->description;


// image Insert Part

         $image=$request->image;

         if($image)
         {

        
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post', $imagename);

        $data->image=$imagename;
       
    }

         $data->save();

         return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function view_post()
    {

        $name=Auth::user()->name;

        $post= Post::where('username', '=', $name)->get();

        return view('post_page', compact('post'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function confirm_update( Request $request , $id)
    {
        $post=post::find($id);

        $post->description=$request->description;



        $image=$request->image;

        if($image)
        {

       
       $imagename=time().'.'.$image->getClientOriginalExtension();

       $request->image->move('post', $imagename);

       $post->image=$imagename;
      
   }

   $post->save();

   return redirect('dashboard');


    }

    /**
     * Update the specified resource in storage.
     */
    public function update_post($id)
    {

        $data=post::find($id);

        return view('update_post', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_post( $id)
    {
        $data=post::find($id);

        $data->delete();

        return redirect()->back();


    }
}
