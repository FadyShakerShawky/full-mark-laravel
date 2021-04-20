@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/courseInfo.css" />
@endsection

@section('main-body')
    <main>
        <!--------------------------- Start Course Detailes --------------------------------------------------------->
        <div class="container-fluid">
            @foreach($data as $course)
            <div class="row">
                <div class="courseNaDetails col-lg-12 p-5 mb-5 bg-dark text-white">
                    <h1 class="courseName  mt-5">

                        {{$course->name}}

                    </h1>
                    <h5 class="brief mb-3">
                        {{$course->briefDescription}}

                    </h5>
                    @if($course->rating > 5)
                    <span> ( </span>{{(5)}} <span> ) </span>
                    @else
                    <span> ( </span>{{$course->rating}}<span> ) </span>
                    @endif

                    <span class="rateNumbers mb-2" id="teacher-rating">
                        @for( $i=1 ; $i <= ($course->rating) && $i <= 5 ; $i++)
                            <i class="fas fa-star text-warning"></i>
                        @endfor
                </span>
                    <div class="author mt-3">
                        Created By
                        <a href="{{route('teacher-profile',$course->teacher_id)}}" class="authorName text-info ml-1">
                           {{$course->user_name}}
                        </a>
                    </div>
                    <div class="details mt-3 col-lg-12 col-sm-12">
                        <span class="update"><i class="far fa-edit"></i> last updated {{$course->updated_at}}
                        </span>
                        <span class="lang ml-4"><i class="fas fa-globe-americas"></i> {{$course->language}}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-------------------------------- End Course Detailes ------------------------------------------------------>

        <!------------------------------- Start Course Content ---------------------------------------------------------------->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Start (What you'll learn) div -->
                    <div class="container p-4 bg-light rounded-lg shadow p-4 mb-5 bg-white">
                        <p class="whatLearn font-weight-bold">What you will learn :</p>
                        <div class="row">
                            <div class="learn col-6">
                                <p>
                                    <i class="fas fa-check"></i><span> {{$course->whatLearn}}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End (What you'll learn) div -->



                    <!-- Start Requirements -->
                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="requirements font-weight-bold">Requirements</p>
                        <div class="reqPoints">
                            <ul>
                                <li>{{$course->requirements}}</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Requirements -->

                    <!-- Start Description -->

                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="desc font-weight-bold">Description</p>
                        <div class="row">
                            <p class="decWords p-3" style="line-height: 30px; font-size: larger">
                                {{$course->description}}

                            </p>


                        </div>
                    </div>

                    <!-- End Description -->
                </div>
                <!-- closing div for <div class="col-lg-9"> -->

                <!-- Start Side Card -->
                <div class="card shadow p-4 mb-4 bg-white col-lg-3 offset-1" style="height: 50rem">
                    <img class="card-img-top"  src="{{ asset('media/' . $course->image) }}" alt="Course Image" />
                    <div class="card-body">
                        <h3 class="card-title text-center">
                            {{$course->name}}
                        </h3>
                        <p class="card-text">
                            {{$course->briefDescription}}
                        </p>
                        <h3 class="card-text font-weight-bolder text-center">
                            &dollar; {{$course->price}}
                        </h3>

                        <button type="button" class="btn btn-danger btn-block my-3">
                            Add to cart
                        </button>
                        <a href="{{route('payment')}}" class="btn btn-outline-danger my-3 btn-block border border-warning">
                            Buy now
                        </a>
                        <p class="text-center">30-Day Money-Back Guarantee</p>
                        <div class="font-weight-bold">
                            <h3>This course includes:</h3>
                            <ul class="list-unstyled">

                                <li class="my-3">
                                    <i class="fas fa-infinity"></i> Full lifetime access
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-mobile-alt"></i> Access on mobile and TV
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Side Card -->

        <!-------------------------------------- End Course Content------------------------------------------->

    </main>
@endsection
