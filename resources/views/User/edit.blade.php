
@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <form enctype="multipart/form-data" action="{{ route('users.update',$user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
               
             <div class="form-group">
              <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="form-group">
                <input type="file" name="image" accept="image/*" class="form-control">
            </div>
          
            <div class="form-group">
                <input type="submit" name="" value="Update" class="btn btn-info">
            </div>
           </form>
        </div>

        
    </div>

</div>


@endsection