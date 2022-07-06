@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        
        <div style="justify-content:center; align-item:center" class="row col-md-8 mx-auto mt-3 d-flex">
            <p><a class="btn btn-primary float-right" href="{{url()->previous()}}">Back</a></p>
            <div class="card mx-auto">
                
                <div class="card-header text-center mt-3 mb-3">
                        Add Model's photos
                </div>
                <div class="card-body">
                        <form role="form" action="{{url('add_photos')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <Input type="text" class="form-control" name="fullname">
                            </div>
                            <div class="form-group mb-3">
                                <label>Photo</label>
                                <Input type="file" class="form-control" name="photo">
                            </div>
                            <div class="submit mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
     </div>


@endsection
