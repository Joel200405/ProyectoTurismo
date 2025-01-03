<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css1/stylelogin.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Login</span>
            </div>
            
            <form action="{{ route('login.validate') }}" method="POST">
                @csrf
                <div class="input_box">
                    <input type="text" id="user" name="username" class="input-field" required>
                    <labe for="user" class="label">Username</labe>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="pass" name="password" class="input-field" required>
                    <labe for="pass" class="label">Password</labe>
                    <i class="bx bx-lock-alt icon"></i>
                </div>

                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember"> Remember me </label>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <div class="input_box">
                    <input type="submit" class="input-submit" value="Login">
                </div>

                <div class="register">
                    <span>Don't have an account? <a href="{{ route('register.index') }}">Register</a> </span>
                </div>
            </form>

            @if ($errors->any())
                <div class="error-message">
                    <strong>{{ $errors->first('username') }}</strong>
                </div>
            @endif
            
        </div>
    </div>
</body>
</html>