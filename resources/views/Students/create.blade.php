@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">{{ __('Employee Management') }}</h1>
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
                        <h4 class="m-0 text-center">{{ __('Add Employee') }}</h4>
                        <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.index') }}" method="POST">
                            @csrf
                            <div class="row card-body col-32">
                                <div class="form-group col-6">
                                    <label>First Name</label>
                                    <br>
                                    <input class="form-control g-2" type="text" name="fname" id="fname" placeholder="Enter First Name">
                                    @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label>Middle Name</label>
                                    <br>
                                    <input class="form-control g-2" type="text" name="midname" id="midname" placeholder="Enter Middle Name">
                                    @error('midname') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label>Last Name</label>
                                    <br>
                                    <input class="form-control g-2" type="text" name="lname" id="lname" placeholder="Enter Middle Name">
                                    @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label>Age</label>
                                    <br>
                                    <input class="form-control g-2" type="interger" name="age" id="age" placeholder="Enter Age">
                                    @error('age') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label>Address</label>
                                    <br>
                                    <input class="form-control g-2" type="text" name="address" id="address" placeholder="Enter Address">
                                    @error('address') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group col-6">
                                    <label>Zip</label>
                                    <br>
                                    <input class="form-control g-2" type="interger" name="zip" id="zip" placeholder="Enter Zip Code">
                                    @error('zip') <span class="text-danger">{{$message}}</span> @enderror
                                </div>

                                <div class="form-group d-grid mx-auto">
                                    <button type="submit" class="btn btn-success">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>




@endsection