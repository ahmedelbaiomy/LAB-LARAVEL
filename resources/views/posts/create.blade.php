@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{route ('posts.store')}}">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Create</button>
</form>
</div>

@endsection