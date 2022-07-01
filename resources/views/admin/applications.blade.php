@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
        @if (Session::has('success'))
        <div class="alert alert-succes">
            {{ Session::get('success') }}
        </div>            
        @endif

        <?php Session::forget('success') ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Location</th>
                <th scope="col">status</th>
                <th scope="col">Gender</th>
                <th scope="col">About</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($user as $apply )      
                
                <tr>
                    <th scope="row">{{$apply->id}}</th>
                    <td>{{ $apply->fullname }}</td>
                    <td>{{ $apply->email }}</td>
                    <td>{{ $apply->phone }}</td>
                    <td>{{ $apply->location }}</td>                    
                    <td>{{ $apply->status }}</td>
                    <td>{{ $apply->gender }}</td>
                    <td>{{ $apply->about_yourself }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">View</a>|
                        <a href="{{url('admit',$apply->id)}}" class="btn btn-info">Approve</a>|
                        <a href="{{url('destroy',$apply->id)}}" onclick="return confirm('Are you sure you want to delete this application?')" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{ $user->links() }}


     </div>
            
@endsection