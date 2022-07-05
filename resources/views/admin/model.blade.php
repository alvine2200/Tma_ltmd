@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        <p><a class="btn btn-primary float-right" href="#">Back</a></p>
        <div class="row mx-auto">
            <div style="margin-bottom: 20px; font-size:20px; font-weight:bold" class="col-md-8 mx-auto">
                <span >{{$photos->fullname}}</span>
            </div>
            <div class="col-md-8 mx-auto mb-5 ">
                <img style="width:500px; height:400px; border-radius:7px; box-shadow:box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" src="models/photos/{{$photos->photo}}" alt="image">
            </div>
            <div class="col-md-8 mx-auto mb-5 ">
                 <p><a class="btn btn-danger" href="{{url('destroy_photos',$photos->id)}}">Delete photo</a></p>
            </div>
         </div>
        
    </div>
@endsection
