<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css1/stylelogin.css') }}">
    <title>Registro</title>
</head>
<body>
    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Registro</span>
            </div>
            
            <form action="{{ route('register.adminstore') }}" method="POST">
                @csrf
                <div class="input_box">
                    <input type="text" id="name" name="nombre" class="input-field" required value="{{ old('nombre') }}">
                    <label for="name" class="label">Nombre</label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" id="username" name="username" class="input-field" required value="{{ old('username') }}">
                    <label for="username" class="label">Username</label>
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="password" name="password" class="input-field" required>
                    <label for="password" class="label">Password</label>
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="input-field" required>
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <i class="bx bx-lock-alt icon"></i>
                </div>

                <div class="input_box">
                    <input type="submit" class="input-submit" value="Registrar">
                </div>
            </form>

            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</body>
</html>