@extends('layouts.general')


@section('main-body')
<link rel="stylesheet" href="{{ asset('style/teacherprofile.css') }}" />
    <main>
        <!-- start of carosel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./media/slide_1.jpg" alt="First slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./media/slide_2.jpg" alt="Second slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./media/slide_3.jpg" alt="Third slide" />
                    <div style="background: #00364028" class="carousel-caption d-none d-md-block">
                        <h5>Study hard</h5>
                        <p>You can achive your goals</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="lower-slider mt-5">
            <div>
                <span >
                <i class="fas fa-laptop" style="font-size: 70px " id="fontaweson"></i>
                <div class="lower-slider_1  mt-2" id="lower-slider_1">
                    <b>{{$counts}} online Courses</b> <br />
                    Enjoy a variety of fresh topics
                </div>
                </span>
            </div>
            <div>
                <span >
                <i class="fas fa-chalkboard-teacher" style="font-size: 70px " id="fontaweson"></i>
                <div class="lower-slider_2 mt-2 " id="lower-slider_2">
                    <b>{{$counts}} online Courses</b> <br />
                    Enjoy a variety of fresh topics
                </div>
                </span>
            </div>
            <div>
                <span>
                     <i class="fas fa-tablet-alt   " style="font-size: 70px " id="fontaweson"></i>

                        <div class="lower-slider_3  mt-2" id="lower-slider_3">
                            <b>{{$counts}} online Courses</b> <br />
                            Enjoy a variety of fresh topics
                        </div>
                </span>
            </div>
        </div>
        <!-- end of carosel -->
        <!-- start of mid belt -->
        <div class="container-fluid" style="margin-top: 10vh; margin-bottom: 10vh">
            <div id="middle-row" class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="cont ml-5 pt-2 my-4 text-light">
                        <h2 class="font-weight-bol h1">Full-Mark for your CHILDREN</h2>
                        <p class="h3">
                            get un limite access to 5,000 of Full-Mark top courses for your
                            children
                        </p>
                        <button class="btn btn-info btn-lg">
                            Get full-mark for bussiness
                        </button>
                    </div>
                </div>
                <img src="./media/pexels-energepiccom-313690.jpg" class="img mx-auto col-md-4 col-sm-12 my-4"
                    id="mid-blt-img" />
            </div>
        </div>
        <!-- end of mid belt -->
        <!-- start of multi pages slider -->
        <nav id="iframe-slider">
            <ul>
                <li>
                    <button class="iframe-slider-link visited" id="trendinglink" href="#trending">
                        Trending course
                    </button>
                </li>
                <li>
                    <button class="iframe-slider-link" id="popularlink" href="#popular">
                        Top teachers
                    </button>
                </li>
            </ul>
        </nav>
        <div id="trending">
            <div class="container mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card card-block shadow scale-up-center">
                            <img class="card-img-top" alt="KIDS_S" src="media/KIDS_S.jpeg"
                                style="height: 180px; width: 100%; display: block" />
                            <div class="card-block">
                                <h4 class="card-title p-3">Arabic</h4>
                                <p class="card-text text-center">
                                    Enjoy your time with the most famous teachers all over the
                                    Republic.
                                </p>
                                <a href="{{ url("course-info")}}" class="btn btn-success m-3 d-block">enroll me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card card-block shadow scale-up-center">
                            <img class="card-img-top" alt="maths" src="media/Maths.jpeg"
                                style="height: 180px; width: 100%; display: block" />
                            <div class="card-block">
                                <h4 class="card-title p-3">Math</h4>
                                <p class="card-text text-center">
                                    Enjoy your time with the most famous teachers all over the
                                    Republic.
                                </p>
                                <a href="{{ url("course-info")}}" class="btn btn-success m-3 d-block">enroll me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card card-block shadow scale-up-center">
                            <img class="card-img-top" alt="science" src="media/science.jpeg"
                                style="height: 180px; width: 100%; display: block" />
                            <div class="card-block">
                                <h4 class="card-title p-3">Science</h4>
                                <p class="card-text text-center">
                                    Enjoy your time with the most famous teachers all over the
                                    Republic.
                                </p>
                                <a href="{{ url("course-info")}}" class="btn btn-success m-3 d-block">enroll me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card card-block shadow scale-up-center">
                            <img class="card-img-top" alt="computer" src="media/computer.jpeg"
                                style="height: 180px; width: 100%; display: block" />
                            <div class="card-block shadow scale-up-center">
                                <h4 class="card-title p-3">Computer</h4>
                                <p class="card-text text-center">
                                    Enjoy your time with the most famous teachers all over the
                                    Republic.
                                </p>
                                <a href="{{ url("course-info")}}" class="btn btn-success m-3 d-block">enroll me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popular" class="d-none">
            <div class="container my-5">
                <div class="row" style="justify-content: space-around">
                @foreach($data as $user)
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card col bg-light shadow scale-up-center">
                            <div style="width: 100%; text-align: center">
                                <img src="./media/TempProfile.jpg" class="card-img-top rounded-circle"
                                    style="width: 50%" alt="Temp profile" />
                            </div>
                            <div class="card-body">
                                <div style="text-align: center">
                                    <p class="card-title" style="color: #6610f2; font-weight: 700">
                                    {{$user->name}}
                                    </p>

                                    <!-- <div class="flex-nowrap d-flex align-items-center"> -->
                                    <span id="teacher-rating" >
                                    @for( $i=1 ; $i <= $user["rating"] && $i <= 5 ; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor
                                    </span>
                                    <!-- </div> -->
                                    <hr />
                                </div>
                                <a href="{{route('teacher-profile',$user->id)}}" class="btn btn-success mx-auto d-block">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- end of multi pages slider -->
    </main>
@endsection
