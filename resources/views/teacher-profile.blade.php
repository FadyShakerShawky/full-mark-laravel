@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="{{ asset('style/teacherprofile.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/chat.css') }}" />
@endsection

@section('main-body')
    <main>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <ul class="nav nav-tabs col-md-12 px-4 my-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab"
                            aria-controls="schedule" aria-selected="false">Schedule</a>
                    </li>
                </ul>
                <div class="tab-content container-fluid" id="myTabContent">
                    <div class="tab-pane col-md-12 fade show active" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="row">
                            <aside class="col-md-4 text-center" id="teacher-card">
                                <img src="{{asset('media/TempProfile.jpg')}}" alt="profile pic" />
                                <h1>{{ $data->users->name }}</h1>
                                <span id="teacher-rating">
                                        @for( $i=1 ; $i <= ($data->rating) && $i <= 5 ; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                </span>
                                <div id="logos-container" class="d-flex justify-content-around">
                                    <a href="{{ $data->t_link_facebook }}" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ $data->t_link_youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>

                                </div>
                            </aside>
                            <article class="row col-md-8 col-sm-12">
                                <div class="col-md-12" id="contentbody">
                                    <h2>Description</h2>

                                    <div class="details">
                                        <p>
                                            {{$data->description}}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12" id="courses">
                                    <h2>Courses</h2>
                                    <div class="details" id="courses-list">
                                        <ol>
                                            @if (count($data->courses) === 0)
                                            <p>This teacher doesn't have any courses yet</p>
                                            @else
                                            @foreach($data->courses as $course)
                                            <li>{{$course["name"]}}</li>
                                            @endforeach
                                            @endif
                                        </ol>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tab-pane col-md-12 fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        <form method="GET" class="row justify-content-center">
                            <select name="school" class="form-control col-md-3">
                                <option>Primary school</option>
                                <option>Secondary school</option>
                                <option>High School school</option>
                            </select>
                            <select name="grade" class="form-control col-md-3">
                                <option>Grade</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <table class="table col-md-12 my-4">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Days of week</th>
                                    <th scope="col">Start time</th>
                                    <th scope="col">End time</th>
                                    <th scope="col">Fees</th>
                                    <th scope="col">Enroll now</th>
                                    <th scope="col">Create Group</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Algebra</td>
                                    <td>01/09/2020-31/07/2021</td>
                                    <td>Sat , Mon , Wed</td>
                                    <td>10:00 am</td>
                                    <td>12:00 pm</td>
                                    <td>10$ /Month</td>
                                    <td>
                                        <a class="btn btn-primary" href="#" role="button">Enroll</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('groups')}}" role="button">New Group</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Algebra</td>
                                    <td>01/09/2020-31/07/2021</td>
                                    <td>Sat , Mon , Wed</td>
                                    <td>10:00 am</td>
                                    <td>12:00 pm</td>
                                    <td>10$ /Month</td>
                                    <td>
                                        <a class="btn btn-primary" href="#" role="button">Enroll</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Algebra</td>
                                    <td>01/09/2020-31/07/2021</td>
                                    <td>Sat , Mon , Wed</td>
                                    <td>10:00 am</td>
                                    <td>12:00 pm</td>
                                    <td>10$ /Month</td>
                                    <td>
                                        <a class="btn btn-primary" href="#" role="button">Enroll</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Chat-->
        <input type="button" value="Chat" name="chat" class="open-button" onclick="openchat()" />

        <div class="chat-popup" id="FormHandler">
            <h1><span style="color: rgb(170, 67, 170)">AcadHool</span> Chat</h1>
            <div id="msgs-container">
                <div class="container1">
                    <label>no3man</label>
                    <p>azyk ya fady</p>
                    <span class="timeNo3man">11:00</span>
                </div>

                <div class="container1 fady">
                    <label>fady</label>
                    <p>no3man azyk 3aml eh</p>
                    <span class="timeFady">11:01</span>
                </div>

                <div class="container1">
                    <label>no3man</label>
                    <p>ana zy l foool</p>
                    <span class="timeNo3man">11:02</span>
                </div>
            </div>
            <textarea placeholder="texting with your teacher....." name="msg" id="msgTextArea" required></textarea>
            <div class="btn1">
                <i class="fas fa-times" id="fCansle"></i>
                <input type="button" name="close" class="btn cancel" onclick="closechat()" />
                <i class="fas fa-paper-plane" id="fSend"></i>
                <input type="button" onclick="messageHandler()" name="send" class="btn" />
            </div>
        </div>
        <!-- End Chat-->
    </main>
@endsection

@section('special-end-page')
    <script src="{{asset('scripts/chat.js')}}"></script>
@endsection
