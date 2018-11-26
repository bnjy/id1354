
  <h1>Create comment</h1>
  {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('comment', 'Comment')}}
      {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'Comment'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
