@extends('layouts.websiteapp')
@section('content')
</form>
<h1>Create Photos</h1>
<form action="/photos/store" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Photo title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">    
  </div>
  <div class="form-group">
    <label for="description">Photo Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>   
  </div>
  <div class="form-group">
    <label for="cover_image"> Photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo">    
  </div>
<input type="hidden" name="album_id" value="{{$album_id}}">
  @csrf
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection