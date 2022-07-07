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
                <th scope="col">Photo</th>
                <th scope="col">Weight</th>
                <th scope="col">Height</th>
                <th scope="col">Hips</th>
                <th scope="col">Burst/Chest</th>
                <th scope="col">Shoe Size</th>
                <th scope="col">Hair Color</th>
                <th scope="col">Complexions</th>
                <th scope="col">Category</th>
                <th scope="col">Instagram</th>
                <th scope="col">Tiktok</th>
                <th scope="col">Experience</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($models as $apply )

                <tr>
                    <th scope="row">{{$apply->id}}</th>
                    <td>{{ $apply->fullname }}</td>
                    <td><img style="width: 100%; height:150px; width:250px; border-radius:7px" src="imagemodels/photos/{{$apply->photo}}"></td>
                    <td>{{ $apply->weight }}</td>
                    <td>{{ $apply->height }}</td>
                    <td>{{ $apply->hips }}</td>
                    <td>{{ $apply->burst_chest }}</td>
                    <td>{{ $apply->shoe_size }}</td>
                    <td>{{ $apply->hair_color }}</td>
                    <td>{{ $apply->complexions }}</td>
                    <td>{{ $apply->category }}</td>
                    <td>{{ $apply->instagram }}</td>
                    <td>{{ $apply->tiktok }}</td>
                    <td>{{ $apply->experience }}</td>
                    <td>
                        <a href="{{url('edit_model',$apply->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('delete_model',$apply->id)}}" onclick="return confirm('Are you sure you want to delete this application?')" class="btn btn-danger">delete</a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>

        {{ $models->links() }}


     </div>


@endsection
