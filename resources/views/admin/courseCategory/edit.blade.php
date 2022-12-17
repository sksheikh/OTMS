@extends('admin.master')

@section('title')
    Edit Course Category
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Course Category</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('course-categories.update',$courseCategory->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-8 mx-auto">
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Category Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" value="{{$courseCategory->name}}" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Category Status</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" {{$courseCategory->status ==1 ? 'checked' : ''}}>Published</label>
                                    <label for=""><input type="radio" name="status" value="0" {{$courseCategory->status ==0 ? 'checked' : ''}}>Unpublished</label>

                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-dark" value="Update">
                                </div>
                            </div>


                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection


