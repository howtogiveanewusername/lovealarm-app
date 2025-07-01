<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            text-align: center;
        }

        .app {
            max-width: 400px;
            width: 90%;
            background-color: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0 20px;
            border-radius: 25px;
            border: none;
            outline: none;
        }

        button {
            background-color: #ff4d94;
            border: none;
            border-radius: 25px;
            padding: 15px 30px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #ff3377;
        }

        label {
            display: block;
            text-align: left;
            margin-left: 10px;
            font-weight: 600;
            opacity: 0.8;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .login-btn {
            margin-top: 15px;
            background-color: transparent;
            border: 2px solid #ff4d94;
            color: #ff4d94;
            font-weight: 600;
            padding: 12px 0;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .login-btn:hover {
            background-color: #ff4d94;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="app">
        <div class="title">Create New Account</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus />
            <p class="text-red-600"> @error('name')
                    {{ $message }}
                @enderror
            </p>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required />
            <p> @error('email')
                    {{ $message }}
                @enderror
            </p>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" />
            <p> @error('password')
                    {{ $message }}
                @enderror
            </p>

            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" />

            <a href="{{ route('home')}}"><button type="submit">Register</button></a>
        </form>

        <a href="{{ route('login') }}" class="login-btn">Already have an account? Login</a>
    </div>
</body>

</html>
