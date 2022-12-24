@extends('admin.master')

@section('title')
    Create Course
@endsection

@section('body')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Create Course </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8 mx-auto">
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Category</label>
                                <div class="col-md-8">
                                    <select name="course_category_id" id="categoryId" class="form-control">
                                        <option value="">--Select Category--</option>
                                        @foreach($courseCategories as $courseCategory)
                                            <option value="{{$courseCategory->id}}" >{{$courseCategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Sub Category Name</label>
                                <div class="col-md-8">
                                    <select name="course_sub_category_id" id="" class="form-control">
                                        <option value="" >--Select Sub Category--</option>
                                        @foreach($courseSubCategories as $courseSubCategory)
                                            <option value="{{$courseSubCategory->id}}" >{{$courseSubCategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Duration</label>
                                <div class="col-md-8">
                                    <input type="number" name="total_hour" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Starting Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="starting_date" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Ending Date</label>
                                <div class="col-md-8">
                                    <input type="date" name="ending_date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" id=""  rows="3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" id="longDescription"  rows="3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for="">Course Banner Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label class="col-md-4" for=""></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-dark" value="Create Course">
                                </div>
                            </div>


                        </div>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->
@endsection


@section('script')
    <script>
        $(document).on('change','#categoryId',function () {
            var categoryId = $(this).val();
            $.ajax({
                url: "/get-sub-category-by-category-id",
                method: "GET",
                dataType: "JSON",
                data:{category_id : categoryId},
                success: function (response) {
                    console.log(response);
                }
            });

        })
    </script>
@endsection



