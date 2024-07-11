<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tab.update', $tab->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <h1 class="text-center">Update</h1>
                            <label for="title">Title
                            </label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$tab->title}}">


                            <label for="desc">Discription
                            </label>
                            <input type="text" name="desc" id="desc" class="form-control" value="{{$tab->desc}}">

                            <input type="submit" name="add" id="add" class="form-control btn btn-dark mt-3">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>