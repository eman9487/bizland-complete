<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 300px;
            height: 625px;
            background-color: black;
            color: white;
        }

        li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 8px 16px;
        }

        .hi {
            margin-top: 320px;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="row">
            <div class="col-lg-3">
                <ul>
                    <li>
                        <a href="">
                            <h1 class="fw-bold fs-1 text-center m-0">Bizland</h1>
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="">
                            <input type="submit" name="logout" id="logout" value="DASHBOARD" class="btn btn-dark text-light form-control fw-bold fs-4 mb-0">
                    </li></a>
                    </li>
                    <li class="mt-2">
                        <a href="setting.blade.php">
                            <input type="submit" name="logout" id="logout" value="WEBSITE SETTING" class="btn btn-dark text-light form-control fw-bold fs-4 m-0">
                        </a>
                    </li>
                    <li class="hi">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="">
                                <input type="submit" name="logout" id="logout" value="LOGOUT" class="btn btn-dark text-light form-control fw-bold ">
                            </a>
                        </form>
                    </li>

                </ul>
            </div>
            <div class="col-lg-9">
                <h1 class="fw-bold mt-3">Welcome John</h1>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="m-0">Total Visitors</h5>
                                <h1 class="text-end fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="m-0">Today Visitors</h5>
                                <h1 class="text-end fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="m-0">Unique Visitors</h5>
                                <h1 class="text-end fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>