@extends('layouts.websiteapp')
@section('content')


<div>
        <a class="btn btn-info" href="/">Go back</a>
        <a class="btn btn-info float-right" href="/photos/create/{{$album->id}}">Upload photo to Album</a>
</div>
<div class="row">
    
  
    <br>
        <h2>{{$album->name}}</h2>
    <div class="col-md-12 ">
        <div class="text-center">
            <img src="/storage/album_covers/{{$album->cover_image}}"  class="img-fluid img-thumbnail">
        </div>
    
    
    <p>{{$album->description}}</p>
    </div>
 
    
</div>

<p>No Albums to display</p>


@endsection