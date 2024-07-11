<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container ">
        <div class="row min-vh-100 d-flex align-items-center justify-content-center ">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-body">
                        @if ($message = Session('message'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif

                        <h1 class="text-center fw-bold text-dark">Register Page</h1>
                        <div>
                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>


                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row ">
                                <div class=" col-md-12">
                                    <div class="form-group">
                                        <label for="name">Usernname</label>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class=" col-md-12">
                                    <div class="form-group mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="email">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="password">

                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" id="password" name="password_confirmation" class="form-control" placeholder="password_confirmation">

                                    </div>
                                    <div class=" col-sm-12 col-md-12 mt-4 text-center">
                                        <button type="submit" class="btn btn-dark form-control">Create Account</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<html>