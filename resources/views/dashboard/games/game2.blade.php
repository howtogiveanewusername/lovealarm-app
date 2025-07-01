<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Player</title>
    <style>
        body {
            font-family: sans-serif;
            background: #121212;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .music-player {
            text-align: center;
            background: #222;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
        }
        .controls button {
            font-size: 24px;
            margin: 10px;
            cursor: pointer;
            background: #333;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
        }
        #progress {
            width: 100%;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="music-player">
        <h2 id="title">No Song</h2>
        <audio id="audio" src=""></audio>

        <div class="controls">
            <button id="prev">⏮</button>
            <button id="play">▶️</button>
            <button id="next">⏭</button>
        </div>

        <input type="range" id="progress" value="0">
    </div>

    <script>
        const audio = document.getElementById("audio");
        const playBtn = document.getElementById("play");
        const prevBtn = document.getElementById("prev");
        const nextBtn = document.getElementById("next");
        const title = document.getElementById("title");
        const progress = document.getElementById("progress");

        // Replace with real file URLs in /public/music
        const songs = [
            { name: "Song 1", src: "{{ asset('music/gg.mp3') }}" },
            { name: "Song 2", src: "{{ asset('music/song2.mp3') }}" },
            { name: "Song 3", src: "{{ asset('music/song3.mp3') }}" }
        ];

        let songIndex = 0;
        let isPlaying = false;

        function loadSong(index) {
            audio.src = songs[index].src;
            title.textContent = songs[index].name;
        }

        function playSong() {
            isPlaying = true;
            audio.play();
            playBtn.textContent = "⏸";
        }

        function pauseSong() {
            isPlaying = false;
            audio.pause();
            playBtn.textContent = "▶️";
        }

        playBtn.addEventListener("click", () => {
            isPlaying ? pauseSong() : playSong();
        });

        nextBtn.addEventListener("click", () => {
            songIndex = (songIndex + 1) % songs.length;
            loadSong(songIndex);
            playSong();
        });

        prevBtn.addEventListener("click", () => {
            songIndex = (songIndex - 1 + songs.length) % songs.length;
            loadSong(songIndex);
            playSong();
        });

        audio.addEventListener("timeupdate", () => {
            const percent = (audio.currentTime / audio.duration) * 100;
            progress.value = percent || 0;
        });

        progress.addEventListener("input", () => {
            audio.currentTime = (progress.value * audio.duration) / 100;
        });

        // Load first song
        loadSong(songIndex);
    </script>
</body>
</html>
