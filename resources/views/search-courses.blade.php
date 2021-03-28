@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/search_courses.css" />
@endsection

@section('main-body')
    <main class="container-fluid" id="page-cont">
        <aside class="col-md-2" style="padding:0">
            <div class="accordion transparent" id="accordionExample">
                <div class="card transparent no-border">
                    <div class="card-header no-border" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left aside-header" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Grade
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show aside-accord-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card transparent no-border">
                    <div class="card-header no-border" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left aside-header" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Grade
                            </button>
                        </h2>
                    </div>

                    <div id="collapseTwo" class="collapse  aside-accord-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card transparent no-border">
                    <div class="card-header no-border" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left aside-header" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Grade
                            </button>
                        </h2>
                    </div>

                    <div id="collapseThree" class="collapse aside-accord-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card transparent no-border">
                    <div class="card-header no-border" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left aside-header" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Grade
                            </button>
                        </h2>
                    </div>

                    <div id="collapseFour" class="collapse  aside-accord-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card transparent no-border">
                    <div class="card-header no-border" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-block text-left aside-header" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Grade
                            </button>
                        </h2>
                    </div>

                    <div id="collapseSix" class="collapse  aside-accord-body" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Primary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="container-fluid col-md-10 my-3">
            <div class="cards-container">
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="costome-card">
                    <div class="card " style="width: 18rem;">
                        <img src="./media/science.jpeg" class="card-img-top" alt="science">
                        <div class="card-body">
                            <h5 class="card-title">Science</h5>
                            <p class="card-text">This course is provided for the secondary stage and includes
                                many examinations and exercises.</p>
                            <a href="{{ url('course-info') }}" class="btn btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection