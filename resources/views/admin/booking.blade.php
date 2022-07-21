@extends('admin.dashboard')
@section('content')

    <div class="container-fluid">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ Session::get('success') }}
        </div>
        @endif

        <?php Session::forget('success') ?>
        <p><a class="btn btn-primary float-left" href="{{url()->previous()}}">Back</a></p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th> 
                <th scope="col">Model's Name</th>               
                <th scope="col">Phone Number</th>
                <th scope="col">When</th>
                <th scope="col">Where</th>
                <th scope="col">Budget</th>
                <th scope="col">Category</th>
                <th scope="col">Purpose</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($booking as $apply )

                <tr>
                    <th scope="row">{{$apply->id}}</th>
                    <td>{{ $apply->name }}</td>                   
                    <td>{{ $apply->models_name }}</td>
                    <td>{{ $apply->phone }}</td>
                    <td>{{ $apply->when }}</td>
                    <td>{{ $apply->where }}</td>
                    <td>{{ $apply->budget }}</td>
                    <td>{{ $apply->category }}</td> 
                    <td>{{ $apply->purpose }}</td>
                    <td style="font-weight:bold;">{{ $apply->status }}</td>                   
                    <td>
                        <a href="{{url('approve_booking',$apply->id)}}" onclick="return confirm('Approve the booking')" class="btn btn-info">Approve</a>
                        <a href="{{url('delete_booking',$apply->id)}}" onclick="return confirm('Are you sure you want to delete this application?')" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{ $booking->links() }}
        
      </div>
    </div>
    
@endsection