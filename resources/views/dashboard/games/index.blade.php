<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        /* Reset */
        * {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
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
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
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
            margin-top: 70px;
            /* space for fixed nav */
            padding: 20px 40px;
            min-height: calc(100vh - 70px);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            color: white;
            user-select: none;
        }

        main h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .game-list {
            width: 100%;
            max-width: 600px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 20px;
        }

        .game-card {
            background: rgba(255, 255, 255, 0.08);
            padding: 25px 15px;
            border-radius: 24px;
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.15);
            text-align: center;
            cursor: pointer;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            user-select: none;
            font-weight: 600;
            font-size: 18px;
        }

        .game-card:hover {
            background: rgba(255, 77, 148, 0.3);
            box-shadow: 0 12px 40px rgba(255, 77, 148, 0.6);
            color: #ff4d94;
        }
    </style>
</head>

<body>

    <nav role="navigation" aria-label="Main navigation">
        <div class="logo">Connection</div>
        <ul>
            <li><a href="{{ route('home#page') }}">Home</a></li>
            <li><a href="{{ route('games') }}">Games</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </nav>

    <main role="main">
        <h1>Games</h1>
        <div class="game-list">
            <a href="{{ route('games#1')}}"><div class="game-card" tabindex="0">Game 1</div></a>
            <a href="{{ route('games#2')}}"><div class="game-card" tabindex="0">Game 2</div></a>
            <div class="game-card" tabindex="0">Game 3</div>
            <div class="game-card" tabindex="0">Game 4</div>
            <div class="game-card" tabindex="0">Game 5</div>
            <div class="game-card" tabindex="0">Game 6</div>
        </div>
    </main>

</body>

</html>
