@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-1 px-3">
    
    <div style="justify-content:center; align-item:center" class="row col-md-8 mx-auto mt-3 d-flex">
        
        <div class="card mx-auto">
            
            <div class="card-header text-center mt-3 mb-3">
                    ADD NEW MODEL
            </div>
            <div class="card-body">
                    <form role="form" action="{{url('store_models')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Full Name</label>
                            <Input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group mb-3">
                            <label>Photo</label>
                            <Input type="file" class="form-control" name="photo">
                        </div>
                        <div class="form-group mb-3">
                            <label>Weight</label>
                            <Input type="number" class="form-control" name="weight">
                        </div>
                        <div class="form-group mb-3">
                            <label>Height</label>
                            <Input type="number" class="form-control" name="height">
                        </div>
                        <div class="form-group mb-3">
                            <label>Hips</label>
                            <Input type="number" class="form-control" name="hips">
                        </div>
                        <div class="form-group mb-3">
                            <label>Burst / Chest</label>
                            <Input type="number" class="form-control" name="burst_chest">
                        </div>
                        <div class="form-group mb-3">
                            <label>Shoe Size</label>
                           <!-- <Input type="number" class="form-control" name="shoe_size"> -->                                
                                <select style="width:100% !Important; height:40px; border-radius:7px; border:1px solid grey;" name="shoe_size" id="shoe">
                                    <option>--Select Option--</option>
                                    @foreach ($shoes=App\Models\ShoeSize::orderby('name','asc')->get() as $shoe)
                                        <option>{{$shoe->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Hair Color</label>
                            <!--<Input type="text" class="form-control" name="hair_color"> -->
                                <select  style="width:100% !Important; height:40px; border-radius:7px;" name="hair_color" id="hair_color">
                                    <option>--select Option--</option>
                                    @foreach ($shoes=App\Models\HairColor::orderby('name','asc')->get() as $shoe)
                                        <option>{{$shoe->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Complexions</label>
                            <!--<Input type="text" class="form-control" name="complexions"> -->
                                <select style="width:100% !Important; height:40px; border-radius:7px;" name="complexions" id="complexions">
                                    <option>--Select Option--</option>
                                    @foreach ($shoes=App\Models\Complexion::orderby('name','asc')->get() as $shoe)
                                        <option>{{$shoe->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Category</label>
                            <Input type="text" class="form-control" name="category">
                        </div>
                        <div class="form-group mb-3">
                            <label>Instagram</label>
                            <Input type="text" class="form-control" name="instagram">
                        </div>
                        <div class="form-group mb-3">
                            <label>Tiktok</label>
                            <Input type="text" class="form-control" name="tiktok">
                        </div>
                        <div class="form-group mb-3">
                            <label>Experience</label>
                            <Input type="text" class="form-control" name="experience">
                        </div>
                        
                        <div class="submit  mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</div>


@endsection