@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             <h3>Title : {{ $post->title }}</h3>

             <br><br>

             <p class="lead">{{ $post->body }}</p>
        </div>

    </div>
     <br><br>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8" style="background-color: #f7efef">
            <h3>The Comments:</h3>
            <br>
            @foreach($comments as $comment)
             <h5>Name: {{ $comment->User->name }}</h5>
               
              
             <p class="lead">The Comment: {{ $comment->comment }}</p>
            
             @endforeach

        </div>
    </div>


    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Auth::check())
            <form action="{{ route('Comment') }}" method="post">
                 @csrf
                <div class="form-group">
                <textarea class="form-control" name="comment" rows="4" cols="50"></textarea>
                </div>
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Comment">
                </div>
            </form>
            @endif
            <p>Plz Login if you want add comment  <a href="{{ route('login') }}" class="btn btn-info">Login</a></p>
        </div>
    </div>


     <br><br>
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('posts.index') }}" class="btn btn-danger col-md-2">Back</a>
        </div>
    </div>
</div>
@endsection
