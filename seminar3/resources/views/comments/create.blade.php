  <h1>Write a comment</h1>
  {!! Form::open(['action' => 'CommentsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
      {{Form::label('comment', 'Comment')}}
      {{Form::textarea('comment', '', ['class' => 'form-control', 'placeholder' => 'What did you think about this recipe?'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  {!! Form::close() !!}
