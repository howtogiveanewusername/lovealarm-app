<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
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
    input[type="email"], input[type="password"] {
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
    .remember-forgot {
      display: flex;
      justify-content: space-between;
      font-size: 14px;
      opacity: 0.8;
      margin-bottom: 20px;
      color: white;
    }
    a {
      color: #ff4d94;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  <div class="app">
    <div class="title">Login to Your Account</div>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <label for="email">Email</label>
      <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />

      <label for="password">Password</label>
      <input id="password" type="password" name="password" required autocomplete="current-password" />

      <div class="remember-forgot">
        <label><input type="checkbox" name="remember" /> Remember me</label>
        @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif
      </div>

      <a href="{{ route('home')}}"><button type="submit">Login</button></a>
    </form>

    <p style="margin-top: 20px; font-size: 14px; opacity: 0.8; color: white;">
      Don’t have an account?
      <a href="{{ route('register') }}" style="color: #ff4d94; font-weight: 600; text-decoration: none;">
        Register here
      </a>
    </p>
  </div>
</body>
</html>
