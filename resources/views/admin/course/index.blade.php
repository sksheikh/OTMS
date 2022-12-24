@extends('admin.master')

@section('title')
    Manage Course
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a class="btn btn-dark" href="{{route('courses.create')}}">Create Course</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Course</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            @if(auth()->user()->role_type ==1)
                                <th>Published By</th>
                            @endif
                            <th>Title</th>
                            <th>Total Hours</th>
                            <th>Duration</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->category->name}}</td>
                                <td>{{$course->subCategory->name}}</td>
                                @if(auth()->user()->role_type ==1)
                                    <td>{{$course->trainer->name}}</td>
                                @endif
                                <td>{{$course->title}}</td>
                                <td>{{$course->price}}</td>
                                <td>{{$course->total_hour}}</td>
                                <td>{{$course->starting_date.' to '.$course->ending_date}}</td>
                                <td>{{$course->short_description}}</td>
                                <td>{!! \Illuminate\Support\Str::words($course->long_description,150,'...') !!}</td>
                                <td>
                                    <img src="{{asset($course->image)}}" alt="" width="50">
                                </td>
                                <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('course.edit',$course->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                    <form action="{{route('course.destroy',$course->id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this??')">
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

