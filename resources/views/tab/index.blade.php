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
            <form action="{{route('tab.store')}}" method="post">
                @csrf
                <h1 class="text-center fw-bold mt-4">Tabs</h1>
                @if (session ('success'))
                <div class="alert alert-success">
                    <b>Success!</b> {{ session ('success')}}
                </div>
                @endif
                <label for="title" class="mt-4">Title</label>
                <input type="text" name="title" id="title" class="form-control input">

                <label for="desc" class="mt-3">Description</label>
                <input type="text" name="desc" id="desc" class="form-control input">

                <input type="submit" name="btn" class="btn btn-dark btn-lg mt-4">
            </form>
            <table class="table mt-5">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->title}}</td>
                    <td>{{$d->desc}}</td>
                    <td>
                        <form action="{{ route('tab.destroy', $d->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('tab.edit',$d->id)}}" class="btn btn-dark btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>