@extends('backend.mastaring.master')
@section('generalsetting','active')
@section('content')
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Update Generalsetting</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            @include('backend.layouts.notification')
            <form action="{{ route('generalsetting.update',$generalSettings->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="col-12">
                            <div class="form-group">
                                <div class="avatar avatar-xl">
                                    <img src="{{ asset('storage/') }}/{{ generalSettings()->logo }}" alt="avatar" style="max-width: 170px">
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="custom-file">
                                <input type="file" name="logo" class="form-control" id="logo">
                            </div>
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->favicon }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="favicon">Favicon</label>
                            <div class="custom-file">
                                <input type="file" name="favicon" class="form-control" id="favicon">
                            </div>
                            @error('favicon')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->first_image }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_image">Your First Image</label>
                            <div class="custom-file">
                                <input type="file" name="first_image" class="form-control" id="first_image">
                            </div>
                            @error('first_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->second_image }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="second_image">Your Second Image</label>
                            <div class="custom-file">
                                <input type="file" name="second_image" class="form-control" id="second_image">
                            </div>
                            @error('second_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>     
                    <div class="col-12">
                        <div class="form-group">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('storage/') }}/{{ generalSettings()->contact_bg }}" alt="avatar" style="max-width: 170px">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact_bg">Contact Background</label>
                            <div class="custom-file">
                                <input type="file" name="contact_bg" class="form-control" id="contact_bg">
                            </div>
                            @error('contact_bg')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>      
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="custom-file">
                                <input type="text" name="name" class="form-control" id="name" value="{{ generalsettings()->name }}">
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>        
                    <div class="col-12">
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <div class="custom-file">
                                <input type="text" name="designation" class="form-control" id="designation" value="{{ generalsettings()->designation }}">
                            </div>
                            @error('designation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="contact_button">Contact Button Text</label>
                            <div class="custom-file">
                                <input type="text" name="contact_button" class="form-control" id="contact_button" value="{{ generalsettings()->contact_button }}">
                            </div>
                            @error('contact_button')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>        
                    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="cv_button">Cv Button Text</label>
                            <div class="custom-file">
                                <input type="text" name="cv_button" class="form-control" id="cv_button" value="{{ generalsettings()->cv_button }}">
                            </div>
                            @error('cv_button')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>        
                    <div class="col-12">
                        <div class="form-group">
                            <label for="demo_button">Demo Button Text</label>
                            <div class="custom-file">
                                <input type="text" name="demo_button" class="form-control" id="demo_button" value="{{ generalsettings()->demo_button }}">
                            </div>
                            @error('demo_button')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>    <div class="col-12">
                        <div class="form-group">
                            <label for="fb_link">Facebook Link</label>
                            <div class="custom-file">
                                <input type="text" name="fb_link" class="form-control" id="fb_link" value="{{ generalsettings()->fb_link }}">
                            </div>
                            @error('fb_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="github_link">Github Link</label>
                            <div class="custom-file">
                                <input type="text" name="github_link" class="form-control" id="github_link" value="{{ generalsettings()->github_link }}">
                            </div>
                            @error('github_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>    
                    <div class="col-12">
                        <div class="form-group">
                            <label for="linkedin_link">Linkedin Link</label>
                            <div class="custom-file">
                                <input type="text" name="linkedin_link" class="form-control" id="linkedin_link" value="{{ generalsettings()->linkedin_link }}">
                            </div>
                            @error('linkedin_link')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email_image">Email Icon</label>
                            <div class="custom-file">
                                <input type="text" name="email_image" class="form-control" id="email_image" value="{{ generalsettings()->email_image }}">
                            </div>
                            @error('email_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>  
                    <div class="col-12">
                        <div class="form-group">
                            <label for="phone_image">Phone Icon</label>
                            <div class="custom-file">
                                <input type="text" name="phone_image" class="form-control" id="phone_image" value="{{ generalsettings()->phone_image }}">
                            </div>
                            @error('phone_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div> 
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email_image">Email Icon</label>
                            <div class="custom-file">
                                <input type="text" name="email_image" class="form-control" id="email_image" value="{{ generalsettings()->email_image }}">
                            </div>
                            @error('email_image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>   
                    <div class="col-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ generalSettings()->address }}" id="address" class="form-control" placeholder="Enter address"/>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>                              
                    <div class="col-12">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" value="{{ generalSettings()->email }}" id="email" class="form-control" placeholder="Enter email address"/>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alter_email">Alternative Email address</label>
                            <input type="email" name="alter_email" value="{{ generalSettings()->alter_email }}" id="alter_email" class="form-control" placeholder="Enter email address"/>
                            @error('alter_email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" value="{{ generalSettings()->phone }}" id="phone" class="form-control" placeholder="Enter phone number"/>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="alter_phone">Alternative Phone number</label>
                            <input type="text" name="alter_phone" value="{{ generalSettings()->alter_phone }}" id="alter_phone" class="form-control" placeholder="Enter Alternative phone number"/>
                            @error('alter_phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" value="{{ generalSettings()->meta_keywords }}" id="meta_keywords" class="form-control" placeholder="Enter meta keywords"/>
                            @error('meta_keywords')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ generalSettings()->meta_title }}" id="meta_title" class="form-control" placeholder="Enter meta title"/>
                            @error('meta_title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <input type="text" name="meta_description" value="{{ generalSettings()->meta_description }}" id="meta_description" class="form-control" placeholder="Enter meta description"/>
                            @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="copyright_text">Copyright Text</label>
                            <input type="text" name="copyright_text" value="{{ generalSettings()->copyright_text }}" id="copyright_text" class="form-control" placeholder="Enter meta description"/>
                            @error('copyright_text')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="about_description">About Us Description <small class="text-danger">*</small></label>
                            <div>
                                <textarea name="about_description" placeholder="Enter About Us Description" class="form-control" rows="7">{{ generalSettings()->about_description }}</textarea>
                            </div>
                        </div>
                        @error('about_description')
                            <div class="alert alert-danger">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>   
                    <div class="col-12">
                        <div class="form-group">
                            <label for="footer_description">Footer Description <small class="text-danger">*</small></label>
                            <div>
                                <textarea name="footer_description" placeholder="Enter Short footer_descriptionn" class="form-control">{{ generalSettings()->footer_description }}</textarea>
                            </div>
                        </div>
                        @error('footer_description')
                            <div class="alert alert-danger">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary waves-effect waves-float waves-light w-100 w-sm-auto">Submit</button>
                    </div>
            </form>
        </div>
        <!-- /.card -->
        </div>
        <div class="col-md-6">
        </div>
    </div>
    </div>
</section>
@endsection