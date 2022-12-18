@extends('admin.master')

@section('title')
    Course Sub Category
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a class="btn btn-dark" href="{{route('course-sub-categories.create')}}">Create Course Sub Category</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Course Sub Category</h4>
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
                            <th>Category Name</th>
                            <th>SubCategory</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courseSubCategories as $courseSubCategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$courseSubCategory->category_id}}</td>
                                <td>{{$courseSubCategory->name}}</td>
                                <td>{{$courseSubCategory->slug}}</td>
                                <td>{{$courseSubCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('course-sub-categories.edit',$courseSubCategory->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                    <form action="{{route('course-sub-categories.destroy',$courseSubCategory->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this??')">
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

