@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts 

                <div class="panel-body">
                 
                 @foreach($posts as $post)

                 <article>
                     
                     <a href="{{route('posts.show',$post->id)}}"><h4>{{ $post->title }}</h4></a><h5>by: {{ $post->User->name }}</h5>

                     <div class="body">{{ $post->body }}</div>

                 </article>

                 <hr>
                 @endforeach
                   
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <a href="{{ route('home') }}" class="btn btn-danger"> Back</a></div>
      </div>
    </div>
</div>
@endsection
