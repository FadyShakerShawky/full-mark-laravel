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
                        <span class="ml-3"><input type="checkbox" value="english" onchange="coursesSearchNameHandler(event)" name="english" id="english" class="mr-2"/><label for="english">English</label></span>
                        <span class="ml-3"><input type="checkbox" value="arabic" onchange="coursesSearchNameHandler(event)" name="arabic" id="arabic" class="mr-2"/><label for="arabic">Arabic</label></span>
                        <span class="ml-3"><input type="checkbox" value="math" onchange="coursesSearchNameHandler(event)" name="math" id="math" class="mr-2"/><label for="math">Math</label></span>
                        <span class="ml-3"><input type="checkbox" value="science" onchange="coursesSearchNameHandler(event)" name="science" id="science" class="mr-2"/><label for="science">Science</label></span>
                    </div>
                    <div class="d-flex flex-column">
                        <span><span>Max price : </span><span id="max-price-value">1000</span></span>
                        <input oninput="priceViewHandler(event, 'max-price-value')" id="max-price-slider" type="range" name="price" min='0' value='1000' max='1000' class='slider' >
                        <span><span>Min price : </span><span id="min-price-value">0</span></span>
                        <input oninput="priceViewHandler(event, 'min-price-value')" id="min-price-slider" type="range" name="price" min='0' value='0' max='1000' class="slider">
                    </div>
                    <div class="d-flex flex-column">
                        <span>Rating</span>
                        <span class="ml-3">
                            <i class="far golden fa-star" id="star-1" onclick="choseRatingHandler(1)" onmouseover="ratingStarsHandler(1)" onmouseout="ratingStarsHandler(1)"></i>
                            <i class="far golden fa-star" id="star-2" onclick="choseRatingHandler(2)" onmouseover="ratingStarsHandler(2)" onmouseout="ratingStarsHandler(2)"></i>
                            <i class="far golden fa-star" id="star-3" onclick="choseRatingHandler(3)" onmouseover="ratingStarsHandler(3)" onmouseout="ratingStarsHandler(3)"></i>
                            <i class="far golden fa-star" id="star-4" onclick="choseRatingHandler(4)" onmouseover="ratingStarsHandler(4)" onmouseout="ratingStarsHandler(4)"></i>
                            <i class="far golden fa-star" id="star-5" onclick="choseRatingHandler(5)" onmouseover="ratingStarsHandler(5)" onmouseout="ratingStarsHandler(5)"></i>
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
                                    <a href="{{ url('course-info') }}" class="btn btn-success">View course</a>
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