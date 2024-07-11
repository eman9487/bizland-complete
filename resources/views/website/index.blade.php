<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-2 bg-dark text-white nav-item p-0">
            <h2 class="text-center p-4">profitize</h2>
            <ul class="list-unstyled mt-4">
                <li class="nav-link">
                    <a href="/dashboard" class="text-decoration-none text-white"><i class="bi bi-columns-gap fs-5 icons"></i>Overview</a>
                </li>
                <li class="nav-link">
                    <a href="{{route('website.index')}}" class="text-decoration-none text-white"><i class="bi bi-gear fs-5 icons"></i>Website Setting</a>
                </li>
                <li class="nav-link">
                    <a href="{{route('tab.index')}}" class="text-decoration-none text-white"><i class="bi bi-arrows-collapse fs-5 icons"></i>Tabs</a>
                </li>
                <li class="nav-link">
                    <form action="/logout" method="post">
                        @csrf
                        <a href="" class="text-center">
                            <input type="submit" name="logout" id="logout" value="Logout" class="btn btn-dark text-light fw-bold aq">
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="col-10">
            <form action="{{route('website.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- contact -->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details About Contact</h1>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session ('success'))
                        <div class="alert alert-success">
                            <b>Success!</b> {{ session ('success')}}
                        </div>
                        @endif
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control input" placeholder="contact@example.com" value="{{ $setting ? $setting->email : '' }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control input" placeholder="+1 676754 4578" value="{{$setting->phone}}">
                            </div>
                        </div>
                        <hr>
                        <h1 class="text-center fw-bold">Social Media</h1>
                        <hr>
                        <div class="row">
                            <div class="col-6 mt-3">
                                <input type="text" name="facebook" id="facebook" class="form-control input" placeholder="facebook" value="{{$setting->facebook}}">
                            </div>
                            <div class="col-6 mt-3">
                                <input type="text" name="instagram" id="instagram" class="form-control input" placeholder="instagram" value="{{$setting->instagram}}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <input type="text" name="twitter" id="twitter" class="form-control input" placeholder="twitter" value="{{$setting->twitter}}">
                            </div>
                            <div class="col-6">
                                <input type="text" name="linkedin" id="linkedin" class="form-control input" placeholder="linkedin" value="{{$setting->linkedin}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero -->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details About Hero</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control input" value="{{$setting->title}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="detail">Detail</label>
                                <input type="text" name="detail" id="detail" class="form-control input" value="{{$setting->detail}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info cards -->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details Info Cards</h1>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="info">
                                    <h5>Card-title 1</h5>
                                </label>
                                <input type="text" name="info" id="info" class="form-control input" value="{{$setting->info}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control input" value="{{$setting->description}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="infoa">
                                    <h5>Card-title 2</h5>
                                </label>
                                <input type="text" name="infoa" id="infoa" class="form-control input" value="{{$setting->infoa}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="descriptiona">Description</label>
                                <input type="text" name="descriptiona" id="descriptiona" class="form-control input" value="{{$setting->descriptiona}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="infob">
                                    <h5>Card-title 3</h5>
                                </label>
                                <input type="text" name="infob" id="infob" class="form-control input" value="{{$setting->infob}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="descriptionb">Description</label>
                                <input type="text" name="descriptionb" id="descriptionb" class="form-control input" value="{{$setting->descriptionb}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="infoc">
                                    <h5>Card-title 4</h5>
                                </label>
                                <input type="text" name="infoc" id="infoc" class="form-control input" value="{{$setting->infoc}}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="descriptionc">Description</label>
                                <input type="text" name="descriptionc" id="descriptionc" class="form-control input" value="{{$setting->descriptionc}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!--about-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details of About Page</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="head">Title</label>
                                <input type="text" name="head" id="head" class="form-control input" value="{{$setting->head}}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12">
                                <label for="heading">Heading</label>
                                <input type="text" name="heading" id="heading" class="form-control input" value="{{$setting->heading}}">
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12">
                                <label for="detaill">Detail</label>
                                <input type="text" name="detaill" id="detaill" class="form-control input" value="{{$setting->detaill}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- progress bar-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Progress Bar</h1>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="bar1">HTML</label>
                                <input type="number" name="bar1" id="bar1" class="form-control input" value="{{$setting->bar1}}">
                            </div>

                            <div class="col-6">
                                <label for="bar2">PHP</label>
                                <input type="number" name="bar2" id="bar2" class="form-control input" value="{{$setting->bar2}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="bar3">CSS</label>
                                <input type="number" name="bar3" id="bar3" class="form-control input" value="{{$setting->bar3}}">
                            </div>

                            <div class="col-6">
                                <label for="bar4">WORDPRESS/CSS</label>
                                <input type="number" name="bar4" id="bar4" class="form-control input" value="{{$setting->bar4}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="bar5">JAVASCRIPT</label>
                                <input type="number" name="bar5" id="bar5" class="form-control input" value="{{$setting->bar5}}">
                            </div>

                            <div class="col-6">
                                <label for="bar6">PHOTOSHOP</label>
                                <input type="number" name="bar6" id="bar6" class="form-control input" value="{{$setting->bar6}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- icon cards-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Icon Cards</h1>
                        <div class="row mt-3">
                            <div class="col-3">
                                <label for="icon1">Happy Clients</label>
                                <input type="text" name="icon1" id="icon1" class="form-control input" value="{{$setting->icon1}}">
                            </div>
                            <div class="col-3">
                                <label for="icon2">Projects</label>
                                <input type="text" name="icon2" id="icon2" class="form-control input" value="{{$setting->icon2}}">
                            </div>
                            <div class="col-3">
                                <label for="icon3">Hours Of Support</label>
                                <input type="text" name="icon3" id="icon3" class="form-control input" value="{{$setting->icon3}}">
                            </div>
                            <div class="col-3">
                                <label for="icon4">Hard Workers</label>
                                <input type="text" name="icon4" id="icon4" class="form-control input" value="{{$setting->icon4}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- brands-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Brands Logo</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <input type="file" name="image1" id="image1" value="{{$setting->image1}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image2" id="image2" value="{{$setting->image2}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image3" id="image3" value="{{$setting->image3}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image4" id="image4" value="{{$setting->image4}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image5" id="image5" value="{{$setting->image5}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image6" id="image6" value="{{$setting->image6}}">
                            </div>
                            <div class="col-12 mt-3">
                                <input type="file" name="image7" id="image7" value="{{$setting->image7}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- services-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Services</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="headd">Heading</label>
                                <input type="text" name="headd" id="headd" class="form-control input" value="{{$setting->headd}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="atitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="atitle" id="atitle" class="form-control input" value="{{$setting->atitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="adetail">Description</label>
                                <input type="text" name="adetail" id="adetail" class="form-control input" value="{{$setting->adetail}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="btitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="btitle" id="btitle" class="form-control input" value="{{$setting->btitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="bdetail">Description</label>
                                <input type="text" name="bdetail" id="bdetail" class="form-control input" value="{{$setting->bdetail}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="ctitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="ctitle" id="ctitle" class="form-control input" value="{{$setting->ctitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="adetail">Description</label>
                                <input type="text" name="cdetail" id="cdetail" class="form-control input" value="{{$setting->cdetail}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="dtitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="dtitle" id="dtitle" class="form-control input" value="{{$setting->dtitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="ddetail">Description</label>
                                <input type="text" name="ddetail" id="ddetail" class="form-control input" value="{{$setting->ddetail}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="etitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="etitle" id="etitle" class="form-control input" value="{{$setting->etitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="edetail">Description</label>
                                <input type="text" name="edetail" id="edetail" class="form-control input" value="{{$setting->edetail}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="ftitle">
                                    <h5>Title</h5>
                                </label>
                                <input type="text" name="ftitle" id="ftitle" class="form-control input" value="{{$setting->ftitle}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="fdetail">Description</label>
                                <input type="text" name="fdetail" id="fdetail" class="form-control input" value="{{$setting->fdetail}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonials-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Testimonial</h1>
                        <div class="row my-3">
                            <div class="col-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control input" value="{{$setting->name}}">
                            </div>
                            <div class="col-4">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control input" value="{{$setting->designation}}">
                            </div>
                            <div class="col-4">
                                <label for="company">About Comapany</label>
                                <input type="text" name="company" id="company" class="form-control input" value="{{$setting->company}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- team-->
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Team</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="hard">Heading</label>
                                <input type="text" name="hard" id="hard" class="form-control input" value="{{$setting->hard}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="namea">Name</label>
                                <input type="text" name="namea" id="namea" class="form-control input" value="{{$setting->namea}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="designationa">Designation</label>
                                <input type="text" name="designationa" id="designationa" class="form-control input" value="{{$setting->designationa}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="nameb">Name</label>
                                <input type="text" name="nameb" id="nameb" class="form-control input" value="{{$setting->nameb}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="designationab">Designation</label>
                                <input type="text" name="designationb" id="designationb" class="form-control input" value="{{$setting->designationb}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="namec">Name</label>
                                <input type="text" name="namec" id="namec" class="form-control input" value="{{$setting->namec}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="designationc">Designation</label>
                                <input type="text" name="designationc" id="designationc" class="form-control input" value="{{$setting->designationc}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="named">Name</label>
                                <input type="text" name="named" id="named" class="form-control input" value="{{$setting->named}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="designationd">Designation</label>
                                <input type="text" name="designationd" id="designationd" class="form-control input" value="{{$setting->designationd}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pricing-->
                <div class="card my-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Pricing</h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="price">Heading</label>
                                <input type="text" name="price" id="price" class="form-control input" value="{{$setting->price}}">
                            </div>
                        </div>
                        <hr>
                        <div class="row my-3">
                            <div class="col-3">
                                <label for="dollar">Price</label>
                                <input type="text" name="dollar" id="dollar" class="form-control input" value="{{$setting->dollar}}">
                            </div>
                            <div class="col-3">
                                <label for="dollara">Price</label>
                                <input type="text" name="dollara" id="dollara" class="form-control input" value="{{$setting->dollara}}">
                            </div>
                            <div class="col-3">
                                <label for="dollarb">Price</label>
                                <input type="text" name="dollarb" id="dollarb" class="form-control input" value="{{$setting->dollarb}}">
                            </div>
                            <div class="col-3">
                                <label for="dollarc">Price</label>
                                <input type="text" name="dollarc" id="dollarc" class="form-control input" value="{{$setting->dollarc}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- address-->
                <div class="card my-4 shadow">
                    <div class="card-body">
                        <h1 class="text-center fw-bold mt-2">Details about Address </h1>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control input" value="{{$setting->address}}">
                            </div>
                        </div>
                    </div>
                </div>
                <!--- submit button-->
                <div class="row mt-4 mb-2">
                    <div class="col-12">
                        <input type="submit" name="btn" id="btn" class="btn btn-dark btn-lg mt-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>