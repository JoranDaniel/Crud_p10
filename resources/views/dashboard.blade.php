<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Jockey One', sans-serif; // Modified this line
            font-size: 30px;
            font-weight: bold;
            margin: 0;
            padding: 0;
            background-image: url('https://cdn.discordapp.com/attachments/1098603596486029313/1182682992594915469/image_1_1.png?ex=6585965e&is=6573215e&hm=f7264f44b46fcf8473b598e1310f951009f2e07e6ca286ff278de31b5605b8b2&');
            background-repeat: no-repeat;
            background-size: cover;
            color: #333;
        }

        .dashboard-container {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .dashboard-header {
            background-color: #3498db;
            color: black;
            padding: 20px;
            text-align: center;
        }

        .dashboard-content {
            padding: 20px;
        }

        .navigation-bar {
            background-color: rgba(255, 255, 255, 0.558);
            color: black;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%; // Added this line
        }

        .navigation-bar a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .user-profile img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="dashboard-container">
        <div class="navigation-bar">
            <div class="left-navigation">
                <a href="#">Home</a>
                <a href="#">Leaderboard</a>
                <a href="#">Merch</a>
            </div>
            <div class="user-profile">
                <span>{{ __("") }} {{ auth()->user()->name }}</span>
                <img src="https://media.discordapp.net/attachments/918918944809713715/1162323141595504660/POV_de_wekker_gaat_en_moet_naar_school.gif?ex=653b84c7&is=65290fc7&hm=ca92a5e86a23c39d9b6b74a89755e56412739bfcf5574d781c3e775f72725c4d&" alt="Profile Photo">
            </div>
        </div>
        </div>
    </div>
</body>
</html>
