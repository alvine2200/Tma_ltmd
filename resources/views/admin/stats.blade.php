@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        <div style="justify-content:center; align-item:center" class="row col-md-10 mx-auto mt-3 d-flex">
               
            <div class="card mx-auto">              
                
                <div class="card-header text-center mt-3 mb-3">
                        ADD NEW STATS
                </div>
                <div class="card-body">
                    <form action="{{url('post_stats')}}" method="post" enctype="multipart/form">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="Followers">Followers</label>
                            <input type="number" name="followers" class="form-control" placeholder="Followers" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="avg likes">Average Likes</label>
                            <input type="number" name="likes" class="form-control" placeholder="Likes" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="posts">Posts</label>
                            <input type="number" name="posts" class="form-control" placeholder="Posts" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="comments">Comments</label>
                            <input type="number" name="comments" class="form-control" placeholder="Comments" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="audience">Audience Intrest</label>
                            <input type="number" name="audience" class="form-control" placeholder="Audience" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="audience">Age Range</label>
                            <select class="form-control" name="age_range">
                                <option value="">--select option--</option>
                                <option value="18-21">18-21</option>
                                <option value="22-25">22-25</option>
                                <option value="26-30">26-30</option>
                                <option value="31-35">31-35</option>
                                <option value="36-40">36-40</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="Gender">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">--select option--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        
                        <button type="submit" class="btn btn-primary mt-3">Add Stats</button>
                                                
                    </form>
                </div>
            </div>

          <div class="card mt-5">
            <div class="card-header">
                Stats Table
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Followers</th>
                        <th scope="col">Likes</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Posts</th>
                        <th scope="col">Age Range</th>
                        <th scope="col">Action</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key)
                            <tr>
                                <td>{{$key->id}}</td>
                                <td>{{$key->followers}}</td>
                                <td>{{$key->likes}}</td>
                                <td>{{$key->comments}}</td>
                                <td>{{$key->posts}}</td>
                                <td>{{$key->age_range}}</td>
                                <td>
                                <a href="{{url('show_stats',$key->id)}}" class="btn btn-primary">Edit Stats</a>
                                </td>
                            </tr>
                        @endforeach
                      
                      
                    </tbody>
                  </table>
            </div>
          </div>


           


        </div>
    </div>
    
@endsection