<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="card login-card">
            <div class="card-header">
                <img src="/img/backgroundLogin.png" alt="backgorund" class="background-image">
                <div class="overlay">
                    <div class="logo">
                        <img src="/img/LogoReka.png" alt="logo reka">
                    </div>
                    <h1>SISTEM INFORMASI PERSURATAN ONLINE</h1>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <i class="bi bi-person"></i>
                        <input type="email" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="input-group">
                        <i class="bi bi-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="col">
                        <a href="{{ route('forgot-pw') }}">Forgot password?</a>
                    </div>
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                    </div>
                    <button type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
