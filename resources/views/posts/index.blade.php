@extends('layouts.app')

@section('content')
<!-- create button -->
<div class="col-md-12 text-center">
    <a href="{{route('posts.create')}}" class="mt-5 ma btn btn-success">Create Post</a>
</div>
<!-- table -->
<table class="table mt-5 container">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['Created_at']}}</td>
      <td class="col">
            <a href="{{ route('posts.show',['post' => $post['id']]) }}" class="btn btn-info">View</a>
            <a href="{{ route('posts.edit',['post' => $post['id']]) }}" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection