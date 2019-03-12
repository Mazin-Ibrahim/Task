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
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('AllPost') }}" class="btn btn-danger">Back</a>
        </div>
    </div>
</div>
@endsection
