@extends('admin.dashboard')
@section('content')
    <div class="container-fluid py-1 px-3">
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
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th scope="col">Comments</th>
                <th scope="col">Action</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach ($contact as $apply )

                <tr>
                    <th scope="row">{{$apply->id}}</th>
                    <td>{{ $apply->name }}</td>                   
                    <td>{{ $apply->phone }}</td>
                    <td>{{ $apply->address }}</td>
                    <td>{{ $apply->subject }}</td>
                    <td>{{ $apply->comments }}</td>
                    <td>{{ $apply->message }}</td>                    
                    <td>
                        <a href="{{url('delete_message',$apply->id)}}" onclick="return confirm('Are you sure you want to delete this application?')" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{ $contact->links() }}
        
    </div>
@endsection
