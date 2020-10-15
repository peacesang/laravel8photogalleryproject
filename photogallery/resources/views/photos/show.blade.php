@extends('layouts.websiteapp')
@section('content')


<div>
        <a class="btn btn-info" href="/albums/show/{{$photo->album->id}}">Go back</a>
        
</div>

<div class="row">
        <br>
        <h2>{{$photo->title}}</h2>
    <div class="col-md-12 ">
        <div class="text-center">
            <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"  class="img-fluid img-thumbnail">
        </div>
    
    
    <p>{{$photo->description}}</p>
    </div>
 


@endsection