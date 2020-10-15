@extends('layouts.websiteapp')
@section('content')



<div>
        <a class="btn btn-info" href="/">Go back</a>
        <a class="btn btn-info float-right" href="/photos/create/{{$album->id}}">Upload photo to Album</a>
</div>
@if(count($album->photos)>0)
<?php
$colcount=count($album->photos);
$i=1;
?>
<h2>{{$album->name}}</h2>
<div class="row">
        <br>
        
    @foreach ($album->photos as $photo)
   
        <div class="col-md-4">
        <a href="/photos/show/{{$photo->id}}"><img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"  class="img-fluid img-thumbnail">
        <br>
        <h4 class="text-center">{{$photo->title}}</h4></a>
        </div>
    @endforeach
    
</div>
@else
<p>No Albums to display</p>
@endif
    

@endsection




    
