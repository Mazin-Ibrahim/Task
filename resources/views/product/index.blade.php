@extends('layouts.app')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        @foreach($products as $product)
           <div style="width: 18rem;" class="card col-md-4  text-center" style="padding: 10px;">
             
              <img class="card-img-top" src="{{ asset($product->path) }}" alt="Card image cap" width="150px" height="150px">
              <div class="card-body">
                <p class="card-text">Name: {{ $product->name }}</p>
                <p class="card-text">Phone: {{ $product->phone }}</p>
              </div>
            </div>

         @endforeach
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New</a>
      </div>
    </div>
</div>


@endsection