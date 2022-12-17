@extends('admin.master')

@section('title')
    Course Category
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a class="btn btn-dark" href="{{route('course-categories.create')}}">Create Course Category</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Course Category</h4>
                <p>{{Session::has('success') ? Session::get('success') : ''}}</p>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseCategories as $courseCategory)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$courseCategory->name}}</td>
                            <td>{{$courseCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{route('course-categories.edit',$courseCategory->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                <form action="{{route('course-categories.destroy',$courseCategory->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this??')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"  class="btn btn-sm btn-danger" >Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection
