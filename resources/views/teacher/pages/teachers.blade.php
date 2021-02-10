@extends('teacher.layouts.full')

@section('content')

<div class="container">
    <div class="col-md-10 mt-5 ">
        <h2>All Teachers</h2>
        <table class = "table table-hover">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Role</th>

            </thead>
            <tbody>
                @foreach($teachers as $t)
                <tr?>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->email }}</td>
                    <td>{{ $t->dob }}</td>
                    <td>{{ $t->gender }}</td>
                    <td>{{ $t->role }}</td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>


@stop