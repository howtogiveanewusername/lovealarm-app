<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      text-align: center;
    }
    .dashboard-container {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
      max-width: 500px;
      width: 90%;
    }
    h1 {
      margin-bottom: 20px;
      font-size: 32px;
    }
    p {
      font-size: 18px;
      margin-bottom: 40px;
    }
    a.logout-btn {
      display: inline-block;
      background-color: #ff4d94;
      color: white;
      padding: 12px 30px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }
    a.logout-btn:hover {
      background-color: #ff3377;
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>You are logged in to your dashboard.</p>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
       class="logout-btn">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
      @csrf
    </form>
  </div>
</body>
</html>
