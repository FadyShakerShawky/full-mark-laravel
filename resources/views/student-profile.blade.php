@extends('layouts.general')
@section('main-body')
    <main style="margin-top: 15vh;min-height: 100vh">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <ul class="nav nav-tabs col-md-12 px-4 my-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Personal info</a>
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
                            <img src="{{asset('media/TempProfile.jpg')}}" alt="profile pic"  class="col-3"/>
                            <div>
                                <h4 class="h1">{{ $data->users->name }}</h4>
                                <div class="ml-5">
                                    <span>Emial : </span><span>{{$data->users->email}}</span><br/>
                                    <span>Government : </span><span>{{$data->government}}</span> <i class="fas fa-pen"></i><br/>
                                    <span>Birthday : </span><span>{{$data->Birthday}}</span> <i class="fas fa-pen"></i><br/>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane col-md-12 fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                       @if (count($data->groups) == 0)
                            <p>Sorry you are not enrolled in any courses yet</p>
                       @else
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Course name</th>
                                        <th scope="col">Teacher name</th>
                                    </tr>
                                    
                                </thead>                            
                                @foreach ($data->groups as $group)
                                    <td>1</td>
                                    <td>{{$group->courseTeacher->course->name}}</td>
                                    <td>{{$group->courseTeacher->teacher->users->name}}</td>
                                @endforeach
                            </table>
                       @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection