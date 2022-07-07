@extends('admin.dashboard')
@section('content')

    <div class="container-fluid py-1 px-3">
        <div style="justify-content:center; align-item:center" class="row col-md-8 mx-auto mt-3 d-flex">
                <p><a href="{{url()->previous()}}" class="btn btn-primary float-left">Back</a></p>
            <div class="card mx-auto">

                <div class="card-header text-center mt-3 mb-3">
                        EDIT MODEL DETAILS
                </div>
                <div class="card-body">
                        <form role="form" action="{{url('update_model',$models->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <Input type="text" class="form-control" value="{{$models->fullname}}" name="fullname">
                            </div>
                            <div class="form-group mb-3">
                                <label>Photo</label>
                                <Input type="file" class="form-control mb-2" value="{{$models->photo}}" name="photo">
                                <img style="width: 100%; height:150px; width:250px;" src="imagemodels/photos/{{$models->photo}}" alt="image">
                            </div>
                            <div class="form-group mb-3">
                                <label>Weight</label>
                                <Input type="number" class="form-control" value="{{$models->weight}}" name="weight">
                            </div>
                            <div class="form-group mb-3">
                                <label>Height</label>
                                <Input type="number" class="form-control" value="{{$models->height}}" name="height">
                            </div>
                            <div class="form-group mb-3">
                                <label>Hips</label>
                                <Input type="number" class="form-control" value="{{$models->hips}}" name="hips">
                            </div>
                            <div class="form-group mb-3">
                                <label>Burst / Chest</label>
                                <Input type="number" class="form-control" value="{{$models->burst_chest}}" name="burst_chest">
                            </div>
                            <div class="form-group mb-3">
                                <label>Shoe Size</label>
                                <Input type="number" class="form-control" value="{{$models->shoe_size}}" name="shoe_size">
                            </div>
                            <div class="form-group mb-3">
                                <label>Hair Color</label>
                                <Input type="text" class="form-control" value="{{$models->hair_color}}" name="hair_color">
                            </div>
                            <div class="form-group mb-3">
                                <label>Complexions</label>
                                <Input type="text" class="form-control" value="{{$models->complexions}}" name="complexions">
                            </div>
                            <div class="form-group mb-3">
                                <label>Category</label>
                                <Input type="text" class="form-control" value="{{$models->category}}" name="category">
                            </div>
                            <div class="form-group mb-3">
                                <label>Instagram</label>
                                <Input type="text" class="form-control" value="{{$models->instagram}}" name="instagram">
                            </div>
                            <div class="form-group mb-3">
                                <label>Tiktok</label>
                                <Input type="text" class="form-control" value="{{$models->tiktok}}" name="tiktok">
                            </div>
                            <div class="form-group mb-3">
                                <label>Experience</label>
                                <Input type="text" class="form-control" value="{{$models->experience}}" name="experience">
                            </div>

                            <div class="submit mt-3 d-grid gap-2 col-6 mx-auto ">
                                <button type="submit" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
