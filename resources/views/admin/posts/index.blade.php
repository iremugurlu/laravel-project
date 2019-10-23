@extends('layouts.admin')



@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Owner</th>
              <th>Category</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created</th>
              <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
              <tr>
                  <td>{{$post->id}}</td>
                  <td><img height="100" src="../../public/images/{{$post->photo ? $post->photo->file : 'https://placeholder.it/400x400'}}" alt=""></td>
                  <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                  <td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>
                  <td>{{$post->title}}</td>
                  <td>{{$post->body}}</td>
                  <td>{{$post->created_at->diffForhumans()}}</td>
                  <td>{{$post->updated_at->diffForhumans()}}</td>
              </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@stop
