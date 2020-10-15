@extends('layouts.websiteapp')
@section('content')


<div>
        <a class="btn btn-info" href="/albums/show/{{$photo->album->id}}">Go back</a>
        <form action="/photos/{{$photo->id}}" method="POST" class="float-right">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">

        </form>
        
</div>

<div class="row">
        <br>
        <h2>{{$photo->title}} </h2>
        <div>
            
        </div>
    <div class="col-md-12 ">
        <div class="text-center">
            <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"  class="img-fluid img-thumbnail">
        </div>
    
    
    <p>{{$photo->description}}</p>
    </div>
 


@endsection