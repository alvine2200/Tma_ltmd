@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        <p><a class="btn btn-primary float-right" href="#">Back</a></p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Photo</th>
                <th scope="col">options</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($photos as $apply )      
                
                <tr>
                    <th scope="row">{{$apply->id}}</th>
                    <td>{{ $apply->fullname }}</td>
                    <td>
                      <img style="width:350px; height:300px; border-radius:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;"
                       src="models/photos/{{ $apply->photo}}" alt="images">
                    </td>                   
                    <td>
                        <a href="{{url('model_photos',$apply->id)}}" class="btn btn-primary">View</a>|
                        <a href="{{url('destroy_photos',$apply->id)}}" onclick="return confirm('Are you sure you want to delete this application?')" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{ $photos->links() }}
     </div>


@endsection
