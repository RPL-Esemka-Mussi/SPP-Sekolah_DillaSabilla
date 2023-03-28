<!doctype html
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body class="text-center">
    @if (session()->has('loginError'))
       <div class="alert alert-dager alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button class="btn-close" type="button" data -bs-dismiss="alert" aria-label="Close"></button>
       </div>
    @endif
    <main class="form-signin w-100 m-auto pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1 class="h3 mb-3 fw-normal">Registration From</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name='name' class="form-control" id="name" name="name" autofocus required>
                        <label for="floatingInput" name="name" id="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
                        <label for="email" name="email" id="email">Email</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password"
                           required>
                        <label for="floatingPassword" name="Password" id="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-primary" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3"> Already Registered? <a href="/login">Login</a></small>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
