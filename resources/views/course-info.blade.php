@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/courseInfo.css" />
@endsection

@section('main-body')
    <main>
        <!--------------------------- Start Course Detailes --------------------------------------------------------->
        <div class="container-fluid">
            <div class="row">
                <div class="courseNaDetails col-lg-12 p-5 mb-5 bg-dark text-white">
                    <h1 class="courseName  mt-5">
                        React and Typescript: Build a Portfolio Project
                    </h1>
                    <h5 class="brief mb-3">
                        Expand your portfolio of projects by building a complex app with the
                        latest web technologies.
                    </h5>
                    <span class="rate p-2 bg-warning text-dark rounded-sm mr-2 font-weight-bold">
                        Highest Rated
                    </span>
                    <span class="rateNumbers mb-2">4.0
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="far fa-star text-warning"></i>
                    </span>
    
                    <span class="noOfRatings">( 377 ratings ) 5,006 students</span>
                    <div class="author mt-3">
                        Created By
                        <a href="" class="authorName text-info ml-1">John Wick</a>
                    </div>
                    <div class="details mt-3 col-lg-12 col-sm-12">
                        <span class="update"><i class="far fa-edit"></i> Last updated 2/2021
                        </span>
                        <span class="lang ml-4"><i class="fas fa-globe-americas"></i> English
                        </span>
                        <span class="subtitle ml-4"><i class="far fa-closed-captioning"></i> English [Auto]
                        </span>
                    </div>
                    <div class="btnContainer mt-3 col-sm-12">
                        <button type="button" class="btn btn-outline-light mr-2 text-wight border border-white">
                            Wishlist <i class="far fa-heart"></i>
                        </button>
                        <button type="button" class="btn btn-outline-light mr-2 text-wight border border-white">
                            Share <i class="fas fa-share"></i>
                        </button>
                        <button type="button" class="btn btn-outline-light text-wight border border-white">
                            Gift this course <i class="fas fa-hand-holding-heart"></i>
                        </button>
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
                        <p class="whatLearn font-weight-bold">What you'll learn</p>
                        <div class="row">
                            <div class="learn col-6">
                                <p>
                                    <i class="fas fa-check"></i> Build a portfolio-ready project
                                    with React and Typescript
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Simplify state updates with the
                                    fabulous Immer library
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Manage a project using a
                                    package-based architecture
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Build an in-browser transpiler +
                                    bundler
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Use Redux middlewares to handle
                                    complicated business logic flows
                                </p>
                            </div>
                            <div class="learn col-6">
                                <p>
                                    <i class="fas fa-check"></i> Integrate React and Redux
                                    together with Typescript
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> See the step-by-step process of
                                    designing and assembling
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Automate your deployment with the
                                    popular Lerna CLI
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Assemble incredibly reusable
                                    React components
                                </p>
                                <p>
                                    <i class="fas fa-check"></i> Use Web Assembly to increase the
                                    performance of your app
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End (What you'll learn) div -->
    
                    <!-- Start Accordion -->
                    <div class="container text-center mb-5">
                        <p class="courseContent mb-4">Course content</p>
                        <p class="courseDuration">
                            27 sections • 388 lectures • 29h 16m total length
                        </p>
    
                        <div class="container">
                            <div class="row">
                                <div class="col-md-offset-1 col-md-9 col-sm-12">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="first" role="button" style="background-color: #16a085;"
                                                        data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Section One
                                                        <span> </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <p>
                                                        Lorem , iaculis ex. Nulla vitae ipsum diam.
                                                        Pellentesque vitae metus vitae massa egestas
                                                        posuere. Mauris ultricies vehicula tempor.
                                                        Pellentesque justo turpis, blandit nec ex eu, tempus
                                                        placerat diam. Morbi a felis commodo eros
                                                        consectetur rhoncus sed eget lectus. Praesent non
                                                        erat vehic
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" style="background-color: #16a085;" role="button"
                                                        data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Section Two
                                                        <span> </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>
                                                        Pellentesque justo turpis, blandit nec ex eu, tempus
                                                        placerat diam. Morbi a felis commodo eros
                                                        consectetur rhoncus sed eget lectus, posuere massa
                                                        id, ultricies est. Pellentesque sit amet venenatis
                                                        est, quis posuere ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed last" style="background-color: #16a085;"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Section Three
                                                        <span> </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>
                                                        Nulla vitae ipsum diam. Pellentesque vitae metus
                                                        vitae massa egestas posuere justo turpis, blandit
                                                        nec ex eu, tempus placerat diam. Morbi a felis
                                                        commodo eros consectetur rhoncus sed eget lectus.
                                                        Praesent non erat vehicula, posuere massa id,
                                                        ultricies est. Pellentesque sit amet venenatis est,
                                                        quis posuere ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed last" style="background-color: #16a085;"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        Section Four
                                                        <span> </span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    <p>
                                                        Nulla vitae ipsum diam. Pellentesque vitae metus
                                                        vitae massa egestas posuere justo turpis, blandit
                                                        nec ex eu, tempus placerat diam. Morbi a felis
                                                        commodo eros consectetur rhoncus sed eget lectus.
                                                        Praesent non erat vehicula, posuere massa id,
                                                        ultricies est. Pellentesque sit amet venenatis est,
                                                        quis posuere ipsum.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion -->
    
                    <!-- Start Requirements -->
                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="requirements font-weight-bold">Requirements</p>
                        <div class="reqPoints">
                            <ul>
                                <li>Basic knowledge of React and Redux</li>
                                <li>
                                    No prior knowledge of Typescript required - an introduction is
                                    provided
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Requirements -->
    
                    <!-- Start Description -->
    
                    <div class="container bg-light shadow p-4 mb-4 bg-white mb-5">
                        <p class="desc font-weight-bold">Description</p>
                        <div class="row">
                            <p class="decWords p-3" style="line-height: 30px; font-size: larger">
                                You've learned React, but what now? Time to build an awesome
                                project for your portfolio! Prove your React knowledge to
                                employers. There are hundreds of resources online for teaching
                                you the basics of React, but few of them go beyond the basics.
                                You need more - something to teach you how to build a large,
                                interesting app. Something unique, something more than another
                                to-do list. This course is your answer. Kick off your learning
                                experience with an introduction on how to use React and
                                Typescript together. Not familiar with Typescript? No problem! A
                                lightning fast - but comprehensive - tutorial is included! Once
                                you're ready with React and Typescript, you'll dive into our big
                                project. You are going to build an interactive browser-based
                                coding environment. It's like a Jupyter Notebook, but for
                                Javascript, with many additional features added in. Yes, this is
                                what you are going to build in this course! You will solve
                                incredible challenges around bundling and transpiling code
                                directly in the browser. This is a task normally done by running
                                Webpack and Babel at your terminal! You will execute users' code
                                safely in the browser just like how famous services like
                                CodeSandBox and CodePen do. Finally, you'll deploy this project
                                using a multi-package architecture to NPM, where your friends
                                and employers can easily download and run your project. During
                                this entire project, I will show you a variety of different
                                solutions to an incredible number of problems. I will show you
                                step-by-step how to solve each problem. You will also see many
                                concerns around performance and security addressed. At the end
                                of the course, you will have an amazing portfolio project with
                                excellent looks and functionality. You will understand every
                                line of code, and be able to explain every bit to potential
                                employers. Here's a partial list of the topics that will be
                                covered in this course:
                            </p>
                            <ul class="descUl">
                                <li>Master the use of React, Redux, and Typescript together</li>
                                <li>
                                    Build a complex and interesting app using a package-based
                                    architecture
                                </li>
                                <li>
                                    Understand the challenges of in-browser code transpiling and
                                    and processing
                                </li>
                                <li>Secure your app against potential security exploits</li>
                                <li>
                                    Safely execute user-provided code directly in the browser
                                </li>
                                <li>
                                    Run a code editor directly in the browser - the same editor
                                    used by VSCode!
                                </li>
                                <li>
                                    Leverage Web Assembly to run a code bundler directly in the
                                    browser at lightning-fast speeds
                                </li>
                                <li>
                                    Use the internals of Redux to manually test out your business
                                    logic
                                </li>
                                <li>Discover dozens of tricks to build a sleek UI</li>
                                <li>
                                    Deploy your app to the NPM registry, where others can easily
                                    use it
                                </li>
                            </ul>
                            <p class="p-3" style="font-size: 18px">
                                I built this course to help you apply your React skills. I built
                                this course to help you apply your React skills. Sign up today
                                and build an incredible app that will prove your knowledge.
                            </p>
                            <div class="p-3">
                                <p class="forwhome">Who this course is for:</p>
                                <ul class="descUl">
                                    <li>Engineers looking to expand their project portfolio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
    
                    <!-- End Description -->
                </div>
                <!-- closing div for <div class="col-lg-9"> -->
    
                <!-- Start Side Card -->
                <div class="card shadow p-4 mb-4 bg-white col-lg-3 offset-1" style="height: 81rem">
                    <img class="card-img-top" src="./media/react.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h3 class="card-title text-center">
                            React and Typescript: Build a Portfolio Project
                        </h3>
                        <p class="card-text">
                            Expand your portfolio of projects by building a complex app with
                            the latest web technologies.
                        </p>
                        <h3 class="card-text font-weight-bolder text-center">
                            &dollar; 11.99
                            <span class="font-weight-lighter"><del> &dollar; 129.99</del></span>
                        </h3>
    
                        <button type="button" class="btn btn-danger btn-block my-3">
                            Add to cart
                        </button>
                        <button type="button" class="btn btn-outline-danger my-3 btn-block border border-warning">
                            Buy now
                        </button>
                        <p class="text-center">30-Day Money-Back Guarantee</p>
                        <div class="font-weight-bold">
                            <h3>This course includes:</h3>
                            <ul class="list-unstyled">
                                <li class="my-3">
                                    <i class="fab fa-youtube"></i> 29.5 hours on-demand video
                                </li>
                                <li class="my-3"><i class="far fa-file"></i> 8 articles</li>
                                <li class="my-3">
                                    <i class="fas fa-download"></i> 202 downloadable resources
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-infinity"></i> Full lifetime access
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-mobile-alt"></i> Access on mobile and TV
                                </li>
                                <li class="my-3">
                                    <i class="fas fa-graduation-cap"></i> Certificate of
                                    completion
                                </li>
                            </ul>
                            <div class="applyCoupon text-center mt-5">
                                <a href="#" style="text-decoration: none">Apply Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Side Card -->
    
        <!-------------------------------------- End Course Content------------------------------------------->
    
        <!------------------------------- Start Scroll Buttom ----------------------------------------------->
    
        <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    
        <!------------------------------- End Scroll Buttom ----------------------------------------------->
    </main>
@endsection