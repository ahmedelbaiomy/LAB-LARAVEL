@extends('layouts.app')

@section('content')
<div class="container">
<form method="Post" action="{{route ('posts.update')}}">
  @csrf
   <!-- @method('PUT') -->
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control"></textarea>
  </div>
  <div>
    <label class="form-label">Post Creator</label>
    <select class="form-control">
        <option>Ahmed</option>
        <option>Ahmed taniiiiii</option>
        <option>Ahmed kman mara</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary mt-3" href="{{route('posts.index')}}">Update</button>
</form>
</div>
@endsection