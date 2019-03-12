@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="row">
            <div class="col-lg-8">
                  <div class="panel panel-default">
                        <div class="panel-heading">
                              <p class="text-center">
                                    {{ $user->name }}'s Profile.
                              </p>
                        </div>
                        
                        <div class="panel-body">
                              <center>
                                    <img src="{{ asset($user->image) }}" width="140px" height="140px" style="border-radius: 50%;" alt="">
                              </center>
                              <br>  
                              {{-- <p class="text-center">
                                    {{ $user->profile->location }}
                              </p> --}}
                              <br>
                              <p class="text-center">
                                    @if(Auth::id() == $user->id)
                                          <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Edit your profile</a>
                                    @endif
                              </p>
                        </div>
                  </div>
                  
              </div>
             
            </div>

            <br><br><br>

            <div class="row">
                  <div class="col-md-3 col-md-offset-1">
                    <a href="{{ route('AllPost') }}" class="btn btn-success">Show Your Posts</a>
             </div> 
            </div>
      </div>


@stop
