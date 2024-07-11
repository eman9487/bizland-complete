<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!--- top bar -->
    <div class="bar">
        <div class="container">

            <div class="top-bar d-flex justify-content-between">

                <div class="left-items gap-4 d-flex">
                    <div class="email d-flex">
                        <i class="bi bi-envelope"></i>
                        <a href="" class="test">{{$setting->email}}</a>
                    </div>
                    <div class="phone d-flex">
                        <i class="bi bi-phone"></i>
                        <p>{{$setting->phone}}</p>
                    </div>
                </div>
                <div class="right-items gap-3 d-flex">
                    <i class="hi bi bi-twitter-x"></i>
                    <i class="hi bi bi-facebook"></i>
                    <i class="hi bi bi-instagram"></i>
                    <i class="hi bi bi-linkedin"></i>
                </div>
            </div>
        </div>
    </div>
    <!--- nav bar -->
    <div class="nav bg-white shadow">
        <div class="container d-flex justify-content-between">
            <h1 class="mb-0">Bizland<span class="text-primary">.</span></h1>
            <div class="nav-item">
                <ul class="style text-center">
                    <li><a class="nav-link active" href="">Home</a></li>
                    <li><a class="nav-link" href="">About</a></li>
                    <li><a class="nav-link" href="">Services</a></li>
                    <li><a class="nav-link" href="">Portfolio</a></li>
                    <li><a class="nav-link" href="">Team</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown 1</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 2</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 3</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 4</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown 5</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a class="nav-link" href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!---hero section-->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1 class="text-dark profile">Welcome To <span class="text-primary">{{$setting->title}}</span></h1>
                    <p class="fs-5 para">{{$setting->detail}}</p>
                    <div class="d-flex align-items-center text-center">
                        <a href="#" class="btn btn-primary btn-lg rounded-1 mt-3 px-4 py-1">Get Started</a>
                        <a href="#" class="btn btn-lg rounded-0 mt-3 ancr"><i class="bi bi-play-circle fs-2 text-primary"></i> <span class="icon">Watch Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---cards section-->
    <section>
        <div class="container">
            <div class="row ro">
                <div class="col-3 my-5">
                    <div class="card rounded-0 border-0 shadow" id="animated">
                        <div class="card-body shadow p-4">
                            <div class="div">
                                <i class="bi bi-activity fs-1"></i>
                            </div>
                            <h4 class="fs-5 fw-bold mt-3">{{$setting->info}}</h4>
                            <p class="mb-4 mt-4">{{$setting->description}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-3 my-5">
                    <div class="card rounded-0 border-0 shadow" id="animated">
                        <div class="card-body shadow p-4">
                            <div class="div">
                                <i class="bi bi-bounding-box-circles fs-1"></i>
                            </div>
                            <h4 class="fs-5 fw-bold mt-3">{{$setting->infoa}}</h4>
                            <p class="mb-4 mt-4">{{$setting->descriptiona}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-3 my-5">
                    <div class="card rounded-0 border-0 shadow" id="animated">
                        <div class="card-body shadow p-4">
                            <div class="div">
                                <i class="bi bi-calendar4-week fs-1"></i>
                            </div>
                            <h4 class="fs-5 fw-bold mt-3">{{$setting->infob}}</h4>
                            <p class="mb-4 mt-4">{{$setting->descriptionb}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-3 my-5">
                    <div class="card rounded-0 border-0 shadow" id="animated">
                        <div class="card-body shadow p-4">
                            <div class="div">
                                <i class="bi bi-broadcast  fs-1 "></i>
                            </div>
                            <h4 class="fs-5 fw-bold mt-3">{{$setting->infoc}}</h4>
                            <p class="mb-4 mt-4">{{$setting->descriptionc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about section my-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        <div class="btn btn-primary btn-pill mt-4 px-4 py-1">ABOUT</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3">{{$setting->head}} <span class="text-primary">About Us</span></h1>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-6 mt-4">
                    <img src="../img/1.jpg" alt="" width="530" class="mb-5">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center mb-5">
                    <div class="about-content">
                        <h2 class="fw-bold">{{$setting->heading}}</h2>
                        <i style="color: gray;">
                            {{$setting->detaill}}
                        </i>
                        <ul>
                            <li>
                                <i class="bi bi-diagram-3 shadow text-primary bg-white"></i>
                                <div>
                                    <h5 class="mt-3 ull">Ullamco laboris nisi ut aliquip consequat</h5>
                                    <p style="color: gray;">Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit shadow text-primary bg-white"></i>
                                <div>
                                    <h5 class="mt-3 ull">Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p style="color: gray;">Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna
                                        pasata redi</p>
                                </div>
                            </li>
                        </ul>
                        <p style="color: gray;">
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!--progress bar-->
    <section id="progress-bar">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">HTML</h6>
                        <h6 class="head">{{$setting->bar1}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar1; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="head">CSS</h6>
                        <h6 class="head">{{$setting->bar3}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar3; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h6 class="head">JAVASCRIPT</h6>
                        <h6 class="head">{{$setting->bar5}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar5; ?>%;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="head">PHP</h6>
                        <h6 class="head">{{$setting->bar2}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width: <?php echo $setting->bar2; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h6 class="head">WORDPRESS/CMS<h6>
                                <h6 class="head">{{$setting->bar4}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width:<?php echo $setting->bar4; ?>%;"></div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <h6 class="head">PHOTOSHOP</h6>
                        <h6 class="head">{{$setting->bar6}}</h6>
                    </div>
                    <div class="progress rounded-0">
                        <div class="progress-bar" style="width:<?php echo $setting->bar6; ?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--card icons-->
    <section id="card-icons" class="my-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-emoji-smile fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">{{$setting->icon1}}</h3>
                                    <p class="mt-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-journal-richtext fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">{{$setting->icon2}}</h3>
                                    <p class="mt-0">Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-headset fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">{{$setting->icon3}}</h3>
                                    <p class="mt-0">Hours Of Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="die card mt-4 shadow rounded-0">
                        <div class="card-body py-4 px-0">
                            <div class="icon-container">
                                <div class="icon-background">
                                    <i class="bi bi-people fs-3 mt-3 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <h3 class="fw-bold mt-3 fs-2">{{$setting->icon4}}</h3>
                                    <p class="mt-0">Hard Workers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---brands-->
    <section id="brand" class="my-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        @if($setting)
                        <img src="{{ asset('uploads/' . $setting->image1) }}" alt="Slide 1" style="width: 86px;" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image2) }}" style="width: 86px;" alt="Slide 2" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image3) }}" style="width: 86px;" alt="Slide 3" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image4) }}" style="width: 86px;" alt="Slide 4" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image5) }}" style="width: 86px;" alt="Slide 5" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image6) }}" style="width: 86px;" alt="Slide 6" class="img-fluid">
                        <img src="{{ asset('uploads/' . $setting->image7) }}" style="width: 86px;" alt="Slide 7" class="img-fluid">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---services-->
    <section id="service" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary btn-pill px-3 py-1">Services</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">{{$setting->headd}} <span class="text-primary">Services</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-activity fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->atitle}}</h4>
                                <p>{{$setting->adetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-broadcast fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->btitle}}</h4>
                                <p>{{$setting->bdetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-easel fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->ctitle}}</h4>
                                <p>{{$setting->cdetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-bounding-box-circles fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->dtitle}}</h4>
                                <p>{{$setting->ddetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-calendar4-week fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->etitle}}</h4>
                                <p>{{$setting->edetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card hover">
                        <div class="card-body py-5">
                            <div class="d-flex justify-content-center mt-4">
                                <span class="bg-primary rounded px-3 py-2">
                                    <i class="bi bi-chat-square-text fs-3 text-white"></i>
                                </span>
                            </div>
                            <div class="text-center">
                                <h4 class="mt-4">{{$setting->ftitle}}</h4>
                                <p>{{$setting->fdetail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonials-->
    <section id="testimonials" class="py-5">
        <div class="container">
            <div class="text-center">
                <img src="../img/a.jpg" alt="" width="100px" class=" rounded-circle mt-4">
                <h3 class="text-white mt-3">{{$setting->name}}</h3>
                <h6 class="grey mb-0">{{$setting->designation}}</h6>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <p class="text-white mt-3">
                    {{$setting->company}}
                </p>
            </div>
        </div>
    </section>
    <!--team-->
    <section id="team" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary btn-pill px-3 py-1">Team</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">{{$setting->hard}} <span class="text-primary">Team</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mt-4 mb-5">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-1.jpg')}}" alt="">
                        <div class="social nisha">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2 "></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center text-color">
                                <h5 class="fs-4">{{$setting->namea}}</h5>
                                <span>{{$setting->designationa}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mb-5">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-2.jpg')}}" alt="">
                        <div class="social nisha">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2 "></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center text-color">
                                <h5 class="fs-4">{{$setting->nameb}}</h5>
                                <span>{{$setting->designationb}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mb-5">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-3.jpg')}}" alt="">
                        <div class="social nisha">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2 "></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center text-color">
                                <h5 class="fs-4">{{$setting->namec}}</h5>
                                <span>{{$setting->designationc}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mb-5">
                    <div class="card border-0 shadow ">
                        <img src="{{asset('/img/team-4.jpg')}}" alt="">
                        <div class="social nisha">
                            <a href=""><i class="bi bi-twitter-x text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-facebook text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-instagram text-dark p-2"></i></a>
                            <a href=""><i class="bi bi-linkedin text-dark p-2 "></i></a>
                        </div>
                        <div class="card-body">
                            <div class="text-center text-color">
                                <h5 class="fs-4">{{$setting->named}}</h5>
                                <span>{{$setting->designationd}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---pricing-->
    <section id="price" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary btn-pill px-3 py-1">PRICING</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">{{$setting->price}} <span class="text-primary">Pricing</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-header border-0">
                            <div class="text-center">
                                <h4>Free</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="unstyled">
                                <div class="text-center">
                                    <li>
                                        <h1><sup>$</sup>{{$setting->dollar}} <span class="small">/month</span></h1>
                                    </li>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li><del>Pharetra massa</del></li>
                                    <li><del>Massa ultricies mi</del></li>
                                </div>
                            </ul>
                        </div>
                        <div class="card-footer border-0">
                            <div class="text-center">
                                <button class="btn btn-primary btn-md ">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-header border-0 bg-primary text-white">
                            <div class="text-center">
                                <h4>Business</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="unstyled">
                                <div class="text-center">
                                    <li>
                                        <h1><sup>$</sup>{{$setting->dollara}} <span class="small">/month</span></h1>
                                    </li>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li><del>Massa ultricies mi</del></li>
                                </div>
                            </ul>
                        </div>
                        <div class="card-footer border-0">
                            <div class="text-center">
                                <button class="btn btn-primary btn-md ">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-header border-0">
                            <div class="text-center">
                                <h4>Developer</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="unstyled">
                                <div class="text-center">
                                    <li>
                                        <h1><sup>$</sup>{{$setting->dollarb}} <span class="small">/month</span></h1>
                                    </li>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li>Massa ultricies mi</li>
                                </div>
                            </ul>
                        </div>
                        <div class="card-footer border-0">
                            <div class="text-center">
                                <button class="btn btn-primary btn-md ">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0">
                        <div class="card-header border-0 header position-relative overflow-hidden">
                            <div class="text-center">
                                <h4>Ultimate</h4>
                                <span class="advance">Advanced</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="unstyled">
                                <div class="text-center">
                                    <li>
                                        <h1><sup>$</sup>{{$setting->dollarc}} <span class="small">/month</span></h1>
                                    </li>
                                    <li>Aida dere</li>
                                    <li>Nec feugiat nisl</li>
                                    <li>Nulla at volutpat dola</li>
                                    <li>Pharetra massa</li>
                                    <li>Massa ultricies mi</li>
                                </div>
                            </ul>
                        </div>
                        <div class="card-footer border-0">
                            <div class="text-center">
                                <button class="btn btn-primary btn-md ">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--question-->
    <section id="question" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary btn-pill px-3 py-1">F.A.Q</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">Frequently Asked <span class="text-primary">Questions</span></h1>
                </div>
            </div>
            @foreach($data as $d)
            <div id="accordion">
                <div class="card mt-4 shadow">
                    <div class="card-header mm">
                        <a class="btn" data-bs-toggle="collapse" href="#collapse{{$loop->iteration}}">
                            <h5 class="five">{{$d->title}}</h5>
                        </a>
                    </div>
                    <div id="collapse{{$loop->iteration}}" class="collapse <?php echo $loop->first ? 'show' : '' ?>" data-bs-parent="#accordion">
                        <div class="card-body mmm">
                            <h6 class="d-flex align-items-center">{{$d->desc}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--contact-->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="btn btn-primary btn-pill px-3 py-1">CONTACT</div>
                    </div>
                    <h1 class="text-center fw-bold mt-3 mb-5">Need Help? <span class="text-primary">Contact Us</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="address">
                        <div class="d-flex gap-3">
                            <i class="bi bi-geo-alt fs-4 text-primary"></i>
                            <h4>Address</h4>
                        </div>
                        <p class="margin">{{$setting->address}}</p>
                    </div>
                    <div class="address mt-4">
                        <div class="d-flex gap-3">
                            <i class="bi bi-telephone fs-4 text-primary"></i>
                            <h4>Call Us</h4>
                        </div>
                        <p class="margin">{{$setting->phone}}</p>
                    </div>
                    <div class="address mt-4">
                        <div class="d-flex gap-3">
                            <i class="bi bi-envelope fs-4 text-primary"></i>
                            <h4>Email Us</h4>
                        </div>
                        <p class="margin">{{$setting->email}}</p>
                    </div>
                    <div class="mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54634.92505868925!2d72.64041604252984!3d31.146322303126517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3923001515646a23%3A0xfcb2866ffe58b367!2sGojra%2C%20Toba%20Tek%20Singh%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1718107695811!5m2!1sen!2s" width="400" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="pb-2">
                                    <h6>Your Name</h6>
                                </label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="pb-2">
                                    <h6>Your Email</h6>
                                </label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="subject" class="pb-2">
                                    <h6>Subject</h6>
                                </label><br>
                                <input type="text" name="subject" id="subject" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="message" class="pb-2">
                                    <h6>Message</h6>
                                </label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg send">Send Message</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!--newsletter-->
    <section id="news" class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-lg-5">
                    <h4 class="mt-5 fw-bold ">Join Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and
                        services!</p>
                    <form action="">
                        <div class="d-flex mb-4">
                            <input type="email" name="email" class="form-control inp"><button type="submit" class="btn btn-primary text-white Subscribe">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <a href="" class="d-flex align-items-center text-decoration-none text-dark">
                        <h3>Bizland</h3>
                    </a>
                    <div class="paper mt-3">
                        <p class="mb-1">A108 Adam Streett5</p>
                        <p class="mb-3">New York, NY 535022</p>
                        <p class="mb-1"><strong>Phone:</strong> +1 5589 55488 55</p>
                        <p class="mb-1"><strong>Email:</strong> info@example.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h3 class="mb-3 fw-bold fs-5">Useful Links</h3>
                    </div>
                    <ul class="right">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Home</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">About Us</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Services</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Terms of service</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <h3 class="mb-3 fw-bold fs-5">Our Services</h3>
                    </div>
                    <ul class="right">
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Web Design</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Web Development</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Product Management</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="">Marketing</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4 class="fw-bold">Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex p-4">
                        <a href=""><i class="bi bi-twitter-x  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-facebook  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-instagram  p-2 icon text-dark fs-5"></i></a>
                        <a href=""><i class="bi bi-linkedin  p-2 icon text-dark fs-5"></i></a>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-12">
                    <div class="text-center">
                        <p>©
                            <span>Copyright</span>
                            <strong class="px-1">Bizland</strong>
                            <span>All Rights Reserved</span>
                        </p>
                        <div class="bootstrap">
                            Designed by
                            <a href="">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>