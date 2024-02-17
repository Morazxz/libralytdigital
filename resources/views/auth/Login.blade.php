<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #c4c6c4">
    <h3></h3>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle rounded"
            style="width: 25rem; height: 19rem; border-radius: 17px">
            <div class="card-body" style="background-color: #f4f7f2;">
                <h3 class="card-title text-center ms-3 mt-3">Login</h3>
                <form>
                    <div class="mb-3 my-3">
                        <input type="emil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a href="{{ url('/login/dashboard') }}" type="button" class="btn btn-primary"
                            style="border-radius: 25px; width: 130px;">Login</a>
                    </div>
                    <div>
                        <p>Belum punya akun? silahkan daftar terlebih dahulu</p>
                        <a href="{{ url('register') }}">
                            <p>Register</p>
                        </a>
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
