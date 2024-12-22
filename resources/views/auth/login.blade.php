<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login - AI-Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <style>
        body {
            background-color: #212529;
            font-family: 'Heebo', sans-serif;
            color: #adb5bd;
        }

        .container-fluid {
            min-height: 100vh;
        }

        .form-container {
            background-color: #343a40;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
            padding: 40px 30px;
        }

        .form-container h3 {
            color: #ffffff;
        }

        .form-floating input {
            background-color: #495057;
            color: #ffffff;
            border: 1px solid #6c757d;
            border-radius: 5px;
        }

        .form-floating input:focus {
            background-color: #495057;
            color: #ffffff;
            border: 1px solid #adb5bd;
            box-shadow: none;
        }

        .form-check-input {
            background-color: #495057;
            border: none;
        }

        .form-check-label, a {
            color: #adb5bd;
        }

        a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 0;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert-danger {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
        }

        .text-danger {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="form-container">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin Dashboard</h3>
                    </a>
                    <h3>Sign In</h3>
                </div>
                <form action="" method="POST">
                    @csrf

                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="email" id="floatingInput"
                            placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" name="password" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    <p class="text-center mt-3 mb-0 text-light">Don't have an account? <a href="">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
