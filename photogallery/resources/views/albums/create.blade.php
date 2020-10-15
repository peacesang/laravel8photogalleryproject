@extends('layouts.websiteapp')
@section('content')
</form>
<h1>Create Album</h1>
<form action="/albums/store" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Album Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">    
  </div>
  <div class="form-group">
    <label for="description">Album Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"></textarea>   
  </div>
  <div class="form-group">
    <label for="cover_image">Album photo</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cover_image">    
  </div>
  
  @csrf
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection