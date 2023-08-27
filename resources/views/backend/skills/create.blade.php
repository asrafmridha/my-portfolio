@extends('backend.mastaring.master')
@section('skills.create','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Skills</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
                <form action="{{ route('skills.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="skill_title">Title* <span class="text-danger">eg:Frontend Developer</span></label>
                            <input type="text" name="skill_title" class="form-control" id="skill_title" placeholder="Enter Skill Title" value="{{ old('skill_title') }}">
                            @error('skill_title')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="year">Year Of Experience</label>
                            <input type="text" name="year" class="form-control" id="year" placeholder="Enter Year OF Experience" value="{{ old('year') }}">
                            @error('year')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="skill_subtitle">Skill Subtitle<span class="text-danger">eg:HTML,CSS</span></label>
                            <input type="text" name="skill_subtitle[]" class="form-control" id="skill_subtitle" placeholder="Enter Amount" value="{{ old('skill_subtitle') }}" onkeydown="addInput(event)">
                            @error('skill_subtitle')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                           <div class="form-group">
                            <label for="skill_level">Skill Level<span class="text-danger">eg:70,80</span></label>
                            <input type="text" name="skill_level[]" class="form-control" id="skill_level" placeholder="Enter Skill Name" value="{{ old('skill_level') }}">
                            @error('skill_level')
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

@section('js')

<script src="{{ asset('backend/js/tag-it.min.js') }}"></script>
    <script>
    $('input[name="skill_subtitle"]').amsifySuggestags({
        type :'bootstrap',
        tagLimit: 15

    });
        $('input[name="skill_level"]').amsifySuggestags({
        type :'bootstrap',
        tagLimit: 15

    });
    </script>
@endsection