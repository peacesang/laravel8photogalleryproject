<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    //
    public function index()
    {
        $albums=Album::with('Photos')->get();
        return view('albums.index')->with('albums',$albums);
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'image|max:1999',
            'description'=>'required'
        ]);
            //get file name with extention
        $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
        //get file name
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //Get extension
        $extension =$request->file('cover_image')->getClientOriginalExtension();

        //create new filename i.e new file name will be filename_timeofupload.extension of image
        $filenameToStore=$filename.'_'.time().'.'.$extension;

        //upload image
        $path=$request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

        // Create album
        $album=new Album;
        $album->name=$request->name;
        $album->description=$request->description;
        $album->cover_image=$filenameToStore;
        
        $album->save();

        return redirect('/albums')->with('success','Album Created');        
    }

    public function show($id)
    {
        $album=Album::with('Photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
}
