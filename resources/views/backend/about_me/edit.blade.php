@extends('backend.mastaring.master')
@section('about_me','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Update About Me</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
            @if($about_me)
                <form action="{{ route('about_me.update',$about_me->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="button_text">Old CV*</label>
                            <div class="input-group">
                                <iframe src="{{ asset('storage/'.$about_me->cv) }}" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cv">New CV (<span class="text-danger">type PDF</span>)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="cv" value="{{ old('cv') }}">
                                </div>
                            </div>
                            @error('cv')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <label for="heading">Heading*</label>
                            <input type="text" name="heading" class="form-control" id="heading" placeholder="Enter Heading" value="{{ old('heading',$about_me->heading) }}">
                            @error('heading')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>      
                        <div class="form-group">
                            <label for="experience">Experience Year* <span class="text text-danger">eg: 4</span></label>
                            <input type="text" name="experience" class="form-control" id="experience" placeholder="Enter Experience Year" value="{{ old('experience',$about_me->experience) }}">
                            @error('experience')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>  
                        <div class="form-group">
                            <label for="completed_project">Completed Project* <span class="text text-danger">eg: 4</span></label>
                            <input type="text" name="completed_project" class="form-control" id="completed_project" placeholder="Enter Completed Project" value="{{ old('completed_project',$about_me->completed_project) }}">
                            @error('completed_project')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>       
                        <div class="form-group">
                            <label for="companies">Companies* <span class="text text-danger">eg: 4</span></label>
                            <input type="text" name="companies" class="form-control" id="companies" placeholder="Enter Completed Project" value="{{ old('companies',$about_me->companies) }}">
                            @error('companies')
                                <p class="text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Short Description</label>
                            <textarea name="description" id="" cols="30" rows="3" class="form-control" >{{ old('description',$about_me->description) }}</textarea>
                            @error('description')
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
            @endif
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