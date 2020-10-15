@extends('layouts.websiteapp')
@section('content')

@if(count($albums)>0)
<?php
$colcount=count($albums);
$i=1;
?>

<div class="row">
    @foreach ($albums as $album)
   
    <div class="col-md-4">
    <a href="/albums/show/{{$album->id}}"><img src="/storage/album_covers/{{$album->cover_image}}"  class="img-fluid img-thumbnail">
    <br>
    <h4 class="text-center">{{$album->name}}</h4></a>
    </div>
    @endforeach
    
</div>
@else
<p>No Albums to display</p>
@endif

@endsection