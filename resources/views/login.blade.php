<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #74ebd5;
        }

        .btn-custom {
            background: #74ebd5;
            border: none;
            color: #fff;
        }

        .btn-custom:hover {
            background: #60cdd8;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold">Login</h3>
                        <p class="text-muted">Welcome back! Please login to your account.</p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" required />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password"
                                required />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" />
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <small class="text-muted">Don't have an account? <a href="#"
                                class="text-decoration-none">Sign up</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
