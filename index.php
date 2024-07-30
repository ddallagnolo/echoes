<!DOCTYPE html>
<html>

<head>
    <title>Music Player</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
        }

        .player {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            max-width: 400px;
            width: 100%;
            height: 500px;
            margin: 0 10px;
            box-shadow: 0 1px 10px gray;
            padding: 10px;
            border-radius: 5px;
        }

        .logo {
            background-color: #f7f7f7;
            width: 100%;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }

        .logo i {
            font-size: 200px;
        }

        #musicName {
            white-space: nowrap;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 30px;
        }

        .controls button {
            border: none;
            background-color: white;
            cursor: pointer;
        }

        .controls i {
            font-size: 60px;
            padding: 5px;
            border-radius: 50%;
            background-color: #f7f7f7;
            transition: all .2s;
        }

        .controls i:hover {
            background-color: lightgray;
        }

        .time {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .time span {
            font-size: 22px;
            color: #333;
        }

        .footer {
            width: 100%;
        }

        .progress-bar {
            height: 8px;
            background-color: #ddd;
            cursor: pointer;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .progress {
            height: 8px;
            background-color: #333;
            border-radius: 5px;
        }
    </style>
    <div class="player">

        <div class="logo">
            <i class='bx bx-music'></i>
        </div>

        <span id="musicName"></span>

        <audio id="player" src=""></audio>
        <div class="controls">
            <button id="prevButton"><i class='bx bx-skip-previous'></i></button>
            <button id="playPauseButton"><i class='bx bx-caret-right'></i></button>
            <button id="nextButton"><i class='bx bx-skip-next'></i></button>
        </div>
        <div class="footer">
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <div class="time">
                <span id="currentTime">0:00</span>
                <span id="duration">0:00</span>
            </div>
        </div>
    </div>
    <script type="module" src="scripts.js"></script>
</body>

</html>