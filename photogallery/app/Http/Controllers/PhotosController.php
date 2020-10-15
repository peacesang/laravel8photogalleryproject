<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotosController extends Controller
{
    //
    public function create($album_id)
    {
        return view('photos.create')->with('album_id',$album_id);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'photo'=>'image|max:1999',
            'description'=>'required'
        ]);
            //get file name with extention
        $filenameWithExt= $request->file('photo')->getClientOriginalName();
        //get file name
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //Get extension
        $extension =$request->file('photo')->getClientOriginalExtension();

        //create new filename i.e new file name will be filename_timeofupload.extension of image
        $filenameToStore=$filename.'_'.time().'.'.$extension;

        //upload image
        $path=$request->file('photo')->storeAs('public/photos/'.$request->album_id, $filenameToStore);

        // Create photo
        $photo=new Photo;
        $photo->album_id=$request->album_id;
        $photo->title=$request->title;
        $photo->description=$request->description;
        $photo->size=$request->file('photo')->getSize();
        $photo->photo=$filenameToStore;
        
        $photo->save();

        return redirect('/albums/show/'.$request->album_id)->with('success','photo uploaded'); 
    }

    public function show($id)
    {
        $photo=Photo::with('Album')->find($id);
        return view('photos.show')->with('photo',$photo);
    }
}
