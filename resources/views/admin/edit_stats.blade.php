@extends('admin.dashboard')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Edit Stats
                </div>
                <div class="card-body">
                    <form action="{{url('edit_stats',$data->id)}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="Followers">Followers</label>
                            <input type="number" value="{{$data->followers}}" name="followers" class="form-control" placeholder="Followers" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="avg likes">Likes</label>
                            <input type="number" value="{{$data->likes}}" name="likes" class="form-control" placeholder="Likes" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="posts">Posts</label>
                            <input type="number" value="{{$data->posts}}" name="posts" class="form-control" placeholder="Posts" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="comments">Comments</label>
                            <input type="number" value="{{$data->comments}}" name="comments" class="form-control" placeholder="Comments" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="audience">Audience Intrest</label>
                            <input type="number" value="{{$data->audience}}" name="audience" class="form-control" placeholder="Audience" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="audience">Age Range</label>
                            <select class="form-control" name="age_range">
                                <option >{{$data['age_range']}}</option>
                                <option value="below 18">Below 18</option>
                                <option value="18-21">18-21</option>
                                <option value="22-25">22-25</option>
                                <option value="26-30">26-30</option>
                                <option value="31-35">31-35</option>
                                <option value="Above 35">Above 35</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="Gender">Gender</label>
                            <select class="form-control" name="gender">
                                <option >{{$data->gender}}</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-primary mt-3">Edit Stats</button>
                                                
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection