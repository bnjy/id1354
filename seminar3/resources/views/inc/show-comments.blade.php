<?php use \App\Http\Controllers\CommentsController; ?>
<?php $comments = CommentsController::showComments(); ?>
<?php
?>
<br>
<h1>Comments</h1>
@if(count($comments) > 0)
    @foreach($comments as $comment)
      <div class="card" >
        <div class="card-body">
        <h5 class="card-title">{{$comment->userIdComment}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Written on {{$comment->created_at}}</h6>
        <p class="card-text">{{$comment->comment}}</p>
        @if(!Auth::guest())
          @if($comment->userIdComment == auth()->user()->name)
          <a href="/comments/{{$comment->id}}/edit" class="btn btn-primary">Edit</a>
          {!!Form::open(['action' => ['CommentsController@destroy', $comment->id], 'method' => 'POST', 'class' => 'btn btn-default'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
          {!!Form::close()!!}
          @endif
        @endif
        </div>
      </div>
        @endforeach
    @else
      <p>No comments found</p>
    @endif
