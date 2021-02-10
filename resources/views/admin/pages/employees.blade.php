@extends('admin.layouts.full')

@section('content')

<div class="container">
    <div class="col-md-10 mt-5 ">
        <h2>All Employees</h2>
        <a href="{{ URL::to('insert') }}" class="btn btn-primary">Add</a>

        <table class = "table table-hover">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach($employees as $e)
                <tr>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->email }}</td>
                    <td>{{ $e->dob }}</td>
                    <td>{{ $e->gender }}</td>
                    <td>{{ $e->role }}</td>
                    <td>
                        <a href="{{ URL::to('edit/'.$e->id) }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$e->id}}">Delete</a>
                        <div class="modal" id="myModal{{$e->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation !!!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                     Are you sure to delete? <b>{{$e->name}}</b>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="{{ URL::to('delete/'.$e->id) }}" class="btn btn-success">Yes</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach
            
            </tbody>
        </table>
    </div>
</div>


@stop