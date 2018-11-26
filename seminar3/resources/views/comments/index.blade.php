@extends('layouts.app')

@section('content')
  <h1>Comments</h1>
  @if(count($comments) > 0)
      @foreach($comments as $comment)
        <div class="card bg-light">
          <h3>{{$comment->comment}}
            <br>
            <small>Written on {{$comment->created_at}}</small>
          </div>
          @endforeach
      @else
        <p>No comments found</p>
      @endif
@endsection
