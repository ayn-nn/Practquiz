@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ __('Employee Records') }}</h1>
                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Employee</a>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Zip</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $studs)
                                <tr>
                                    <td>{{ $studs->id }}</td>
                                    <td>{{ $studs->fname }}</td>
                                    <td>{{ $studs->midname }}</td>
                                    <td>{{ $studs->lname }}</td>
                                    <td>{{ $studs->age }}</td>
                                    <td>{{ $studs->address }}</td>
                                    <td>{{ $studs->zip }}</td>
                                    <td>
                                        <span class="badge bg-warning p-1 px-3"><a href="{{ route('students.edit', $studs->id) }}">
                                                <b>
                                                    <h5>EDIT</h5>
                                                </b>
                                            </a></span>

                                        <span class="badge bg-danger p-1"><a href="{{ route('students.delete', $studs->id) }}">
                                                <b></b>
                                                <h5>DELETE</h5></b>
                                            </a></span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>




@endsection