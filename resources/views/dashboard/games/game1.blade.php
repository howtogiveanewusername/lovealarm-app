<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Love Alarm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #fff0f5;
            font-family: 'Arial', sans-serif;
            color: #333;
            text-align: center;
            padding: 40px 20px;
        }

        .container {
            background: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff4f81;
            font-size: 2rem;
            margin-bottom: 30px;
        }

        button {
            background: #ff4f81;
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            border-radius: 25px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #e03a6d;
        }

        #timer {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #ff4f81;
        }

        #result {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #ff4f81;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <a href="{{ route('games') }}" class="back-link">← Back to Home</a>

    <div class="container">
        <h1>Love Alarm 💘</h1>
        <button onclick="startAlarm()">Start Alarm</button>
        <p id="timer">00:00</p>
        <p id="result"></p>
    </div>

    <script>
        function startAlarm() {
            let seconds = 10;
            const timer = document.getElementById('timer');
            const result = document.getElementById('result');
            result.textContent = '';
            const interval = setInterval(() => {
                timer.textContent = '00:' + String(seconds).padStart(2, '0');
                seconds--;
                if (seconds < 0) {
                    clearInterval(interval);
                    result.textContent = Math.random() > 0.5
                        ? 'Someone rang your Love Alarm 💖'
                        : 'No signal detected 😢';
                }
            }, 1000);
        }
    </script>
</body>
</html>
