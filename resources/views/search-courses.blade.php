@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/search_courses.css" />
@endsection

@section('main-body')

    <main class="container-fluid mb-3" id="page-cont">
        <aside class="col-md-3">
            <div class="card h-100">
                <div class="card-header title">
                    Search parameters
                </div>
                <div class="card-body d-flex flex-column" id="filter-params">
                    <div class="d-flex flex-column">
                        <span>Course</span>

                        @foreach($course as $courses)
                        <span class="ml-3">
                            <input type="checkbox" value="{{$courses->name}}" onchange="coursesSearchNameHandler(event)" name="{{$courses->name}}" id="{{$courses->name}}" class="mr-2"/>
                            <label for="{{$courses->name}}">{{$courses->name}}</label>
                        </span>
                        @endforeach

                    <div class="d-flex flex-column">
                        <span>Price</span>
                        <span class="ml-3">
                            <span><span>Max : </span><span id="max-price-value">{{$maxvalue}}</span></span>
                            <input oninput="priceViewHandler(event, 'max-price-value')" id="max-price-slider" type="range" name="price" min='{{$minvalue}}' value='{{$maxvalue}}' max='{{$maxvalue}}' class='slider' >
                            <span><span>Min : </span><span id="min-price-value">{{$minvalue}}</span></span>
                            <input oninput="priceViewHandler(event, 'min-price-value')" id="min-price-slider" type="range" name="price" min='{{$minvalue}}' value='{{$minvalue}}' max='{{$maxvalue}}' class="slider">
                        </span>
                      </div>
                    <div class="d-flex flex-column">
                        <span>Rating</span>
                        <span class="ml-3"><span><span>Max : </span><span id="max-rating-value">5</span></span>
                            <input oninput="ratingViewHandler(event, 'max-rating-value')" id="max-rating-slider" type="range" name="rating" min='0' step="0.1" value='5' max='5' class='slider' >
                            <span><span>Min : </span><span id="min-rating-value">0</span></span>
                            <input oninput="ratingViewHandler(event, 'min-rating-value')" id="min-price-slider" type="range" name="price" min='0' step="0.1" value='0' max='5' class="slider">

                        </span>
                    </div>
                    <input type="button" value="Filter results" class="btn btn-success" onclick="filterResults()">
                </div>
            </div>
        </aside>
        <div class="col-md-9">
            <div class="card h-100">
                <div class="card-header align-items-center" style="gap: 10px">
                    <span class="title">Our Courses with</span>
                   @if ($searchText)
                   <span id='search-key-word'>
                    "key words <span class="search-item-display" id='search-key-word-text'>{{$searchText}}</span> "
                   </span>

                   @endif
                </div>
                <div class="card-body row" id="search-result-container">
                        @foreach ($data as $course)
                        <div class="mx-auto flex-wrap" style="width: 15rem">
                            <div class="card">
                                <img src="./media/science.jpeg" class="card-img-top" alt="science">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $course->courseName }}</h4>
                                    <h5>By : <a href="{{ route('teacher-profile' ,$course->teacherId ) }}">{{$course->teacherName}}</a></h5>
                                    <p class="card-text">{{$course->description}}</p>
                                    <a href="{{route('course-info',$course->course_id)}}" class="btn btn-success">View course</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('special-end-page')
    <script src="{{asset('scripts/search-courses.js')}}"></script>
@endsection
