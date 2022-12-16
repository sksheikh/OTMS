@extends('front.master')

@section('title')
    Home
    @endsection


@section('body')
    <!--Start Carousel Slider-->
    <div id="carouselSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="1" ></button>
            <button type="button" data-bs-target="#carouselSlider" data-bs-slide-to="2" ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}front/assets/image/carousel-03.jpg" height="450" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/assets/image/carousel-02.png" height="450" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/assets/image/carousel-01.jpg" height="450" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--End Carousel Slider-->

    <!--Start All Courses Section-->
    <section class="py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center">All Courses</h3>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/assets/image/course-01.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Web Design & Development Using Laravel & Vue</h4>
                                    <p>Price: 25,000 Tk</p>
                                    <p>Total Hour: 240 Hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/assets/image/course-01.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Web Design & Development Using Laravel & Vue</h4>
                                    <p>Price: 25,000 Tk</p>
                                    <p>Total Hour: 240 Hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/assets/image/course-01.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Web Design & Development Using Laravel & Vue</h4>
                                    <p>Price: 25,000 Tk</p>
                                    <p>Total Hour: 240 Hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('/')}}front/assets/image/course-01.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-title">Web Design & Development Using Laravel & Vue</h4>
                                    <p>Price: 25,000 Tk</p>
                                    <p>Total Hour: 240 Hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-primary">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End All Courses Section-->
@endsection
