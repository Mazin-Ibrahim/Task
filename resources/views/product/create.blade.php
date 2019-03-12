@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="post">
           	{{ csrf_field() }}
           	<div class="form-group">
           		<input type="text" name="name" placeholder="Enter Your Name" class="form-control">
           	</div>

           	<div class="form-group">
           		<input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
           	</div>

           	<div class="form-group">
           		<input type="file" name="path" placeholder="Upload Image" accept="image/*" class="form-control">
           	</div>

           	<div class="form-group">
           		<input type="submit" name="" value="Save" class="btn btn-info">
           	</div>
           </form>
        </div>

        
    </div>

</div>


@endsection