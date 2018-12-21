@extends('layouts.app')

@section('content')
  <h1>Edit comment</h1>
  {!! Form::open(['action' => ['CommentsController@update', $comment->id], 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('comment', 'Comment')}}
      {{Form::textarea('comment', $comment->comment, ['class' => 'form-control', 'placeholder' => 'Comment'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
