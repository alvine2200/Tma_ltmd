@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        <p><a class="btn btn-primary float-right" href="#">Back</a></p>
        <div class="row mx-auto">
            <div style="margin-bottom: 20px; font-size:20px; font-weight:bold" class="col-md-8 mx-auto">
                <span >{{$photos->fullname}}</span>
            </div>
            <div class="col-md-8 mx-auto mb-5 ">
                <img style="width:500px; height:400px;border:1px solid grey; border-radius:10px; border-shadow:30px;" src="models/photos/{{$photos->photo}}" alt="image">
            </div>
            <div class="col-md-8 mx-auto mb-5 ">
                 <p><a class="btn btn-danger" href="{{url('destroy_photos',$photos->id)}}">Delete photo</a></p>
            </div>
         </div>
        
    </div>
@endsection
