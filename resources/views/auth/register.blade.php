<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #dcdddd">

    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle rounded"
            style="width: 25rem; height: 19rem; border-radius: 17px">
            <div class="card-body" style="background-color: #f3f3f3;">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="alamat">
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                            placeholder="Confirm Password">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-secondary mx-3" style="border-radius: 7px">Daftar</button>
                        <a class="btn btn-secondary" style="border-radius: 7px" href="{{ route('login') }}">Login</a>
                    </div>
                    <div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
