@extends('backend.mastaring.master')
@section('experience.index','active')
@section('menu','menu-open')
@section('content')
<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-1">
                <a href="{{ route('experience.create') }}" class="btn btn-primary">Create Experience </a>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    @include('backend.layouts.notification')
    <!-- /.card-header -->
    <div class="card-body">     
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Designation</th>
                <th>Company Name</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($experiences as $row)
                    <tr>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->company }}</td>
                        <td>{{ $row->date }}</td>
                        <td>
                         <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-block btn-primary btn-sm"  data-toggle="modal" data-target="#service_modal-{{ $row->id }}">edit</button>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('experience.destroy',$row->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="" class="deleteBtn btn btn-block btn-danger btn-sm" data-id="{{ $row->id }}">Delete</a>
                            </form>
                            </div>
                         </div>
                        </td>
                    </tr>
                        <div class="modal fade" id="service_modal-{{ $row->id }}">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Edit Feature</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form action="{{ route('experience.update',$row->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Designation <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Designation" value="{{ old('title',$row->title) }}">
                                            @error('title')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label for="company">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" name="company" class="form-control" id="company" placeholder="Enter Company Name" value="{{ old('company',$row->company) }}">
                                            @error('company')
                                                <p class="text text-danger">{{ $message }}</p>
                                            @enderror
                                        </div> 
                                        <div class="form-group">
                                            <label for="date">Date <span class="text-danger">eg(2018-2020)/ (23 march - 21 December) 2023</span></label>
                                            <input type="text" name="date" class="form-control" id="date" placeholder="Enter Date" value="{{ old('date',$row->date) }}">
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
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>     
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>
@endsection
@section('js')
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.deleteBtn').click(function(e){
            var form=$(this).closest('form');
            var dataId=$(this).data('id');
            e.preventDefault();

            //swal javascript
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                form.submit();
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });
        });
    </script>
@endsection