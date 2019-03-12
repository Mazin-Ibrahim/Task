@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="title" placeholder="Enter the title" class="form-control">
            </div>

            <div class="form-group">
              <textarea name="body" class="form-control" placeholder="Enter the body"></textarea>
            </div>

          
            <div class="form-group">
                <input type="submit" name="" value="Save" class="btn btn-info">
            </div>
           </form>
        </div>

        
    </div>

</div>


@endsection