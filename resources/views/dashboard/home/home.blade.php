<!-- resources/views/lovealarm.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    /* Reset */
    * {
      box-sizing: border-box;
    }
    body, html {
      margin: 0; padding: 0;
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: white;
    }

    /* Navigation bar */
    nav {
      width: 100%;
      padding: 15px 40px;
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 10;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.15);
    }
    nav .logo {
      font-weight: 700;
      font-size: 22px;
      letter-spacing: 0.1em;
      user-select: none;
      cursor: default;
      text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 25px;
    }
    nav ul li {
      user-select: none;
    }
    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      transition: color 0.3s ease;
      padding: 6px 10px;
      border-radius: 12px;
    }
    nav ul li a:hover {
      background: rgba(255, 77, 148, 0.3);
      color: #ff4d94;
    }

    /* Main content container */
    main {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 0 20px;
      text-align: center;
      margin-top: 70px; /* space for fixed nav */
    }

    main .app {
      max-width: 400px;
      width: 100%;
      background: rgba(255, 255, 255, 0.08);
      padding: 40px 30px;
      border-radius: 24px;
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: white;
      user-select: none;
    }
    main .icon {
      font-size: 60px;
      margin-bottom: 15px;
    }
    main .title {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 25px;
      letter-spacing: 0.04em;
      text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    main .text {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 35px;
      line-height: 1.4;
    }
    main .ring-btn {
      background: linear-gradient(45deg, #ff4d94, #ff3377);
      border: none;
      border-radius: 30px;
      padding: 16px 36px;
      color: white;
      font-weight: 600;
      font-size: 17px;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(255, 77, 148, 0.5);
      transition: background 0.3s ease, box-shadow 0.3s ease;
      user-select: none;
    }
    main .ring-btn:hover {
      background: linear-gradient(45deg, #ff3377, #e60062);
      box-shadow: 0 8px 20px rgba(230, 0, 98, 0.7);
    }
  </style>
</head>
<body>

  <nav role="navigation" aria-label="Main navigation">
    <div class="logo">Connection</div>
    <ul>
      <li><a href="{{ route('home#page')}}">Home</a></li>
      <li><a href="{{ route('games')}}">Games</a></li>
      <li><a href="#">Messages</a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </nav>

  <main role="main">
    <div class="app">
      <div class="icon">❤️</div>
      <div class="title">Find Your Friend</div>
      <div class="text">Join the community and discover meaningful connections.</div>
      <a href="#">
        <button class="ring-btn" type="button">Get Started</button>
      </a>
    </div>
  </main>

</body>
</html>
