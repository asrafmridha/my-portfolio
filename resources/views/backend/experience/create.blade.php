@extends('backend.mastaring.master')
@section('experience.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Experience</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
                <form action="{{ route('experience.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Designation <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Designation" value="{{ old('title') }}">
                            @error('title')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="company">Company Name <span class="text-danger">*</span></label>
                            <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company Name" value="{{ old('company') }}">
                            @error('company')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="date">Date <span class="text-danger">eg(2018-2020)/ (23 march - 21 December) 2023</span></label>
                            <input type="text" name="date" class="form-control" id="date" placeholder="Enter Date" value="{{ old('date') }}">
                            @error('date')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div> 
                  
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
        <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection