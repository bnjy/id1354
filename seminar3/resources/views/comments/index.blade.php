@extends('layouts.app')

@section('content')
  <h1>Comments</h1>
  @if(count($comments) > 0)
      @foreach($comments as $comment)
        <div class="card" style="width: 50em;" >
          <div class="card-body">
          <h5 class="card-title">{{$comment->userIdComment}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Written on {{$comment->created_at}}</h6>
          <p class="card-text">{{$comment->comment}}</p>
          <a href="/comments/{{$comment->id}}/edit" class="card-link">Edit</a>
          {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
          </div>
        </div>
          @endforeach
      @else
        <p>No comments found</p>
      @endif
@endsection
