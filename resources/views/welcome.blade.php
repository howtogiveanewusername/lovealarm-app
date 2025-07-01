<!-- resources/views/lovealarm.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    .icon {
      font-size: 48px;
      margin-bottom: 10px;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .count {
      font-size: 60px;
      font-weight: bold;
      margin: 20px 0 10px;
    }

    .text {
      font-size: 14px;
      opacity: 0.8;
      margin-bottom: 30px;
    }

    .ring-btn {
      background-color: #ff4d94;
      border: none;
      border-radius: 25px;
      padding: 15px 30px;
      color: white;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .ring-btn:hover {
      background-color: #ff3377;
    }
  </style>
</head>
<body>
  <div class="app">
    <div class="icon">❤️</div>
    <div class="title">Welcome to My App</div>
    {{-- <div class="count">Are you Ready?</div> --}}
    <div class="text"></div>
    <a href="{{ route('welcomePage')}}"><button class="ring-btn">Enter</button></a>
  </div>
</body>
</html>
