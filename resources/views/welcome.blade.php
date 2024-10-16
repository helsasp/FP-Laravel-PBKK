<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> <!-- Poppins font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif; /* Use Poppins font */
            background-color: #f7f0ff;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://example.com/paper-pencil-background.png'); /* Subtle background image */
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: cover;
        }

        .navbar {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .navbar a {
            color: #fff;
            background-color: #6a0dad;
            padding: 10px 20px;
            margin-left: 10px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #550a8a;
            transform: scale(1.05); /* Slightly grow on hover */
        }

        .welcome-container {
            text-align: center;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
            animation: fadeIn 1s ease-in; /* Fade-in animation */
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .title {
            font-size: 48px;
            font-weight: 700;
            color: #6a0dad;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 24px;
            color: #6c757d;
            margin-bottom: 40px;
        }

        .links a {
            color: #6a0dad;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: .05rem;
            text-decoration: none;
            border: 2px solid #6a0dad;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Add transform transition */
        }

        .links a:hover {
            background-color: #6a0dad;
            color: #fff;
            transform: translateY(-3px); /* Lift effect on hover */
        }

        .icons {
            margin-top: 20px;
            font-size: 50px;
        }

        .icons .fa {
            margin: 0 15px;
            color: #6a0dad;
            transition: color 0.3s, transform 0.3s; /* Icon transition */
        }

        .icons .fa:hover {
            color: #550a8a;
            transform: scale(1.2); /* Slightly grow on hover */
        }

        footer {
            position: absolute;
            bottom: 10px;
            text-align: center;
            width: 100%;
            font-size: 14px;
            color: #6c757d;
        }

        .background-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://example.com/pencil-paper-icons.png'); /* Substitute this with actual images */
            background-size: contain;
            background-repeat: no-repeat;
            z-index: 1;
            opacity: 0.1; /* Subtle overlay */
        }
    </style>
</head>
<body>

    <div class="navbar">
        @if (Route::has('login') && Auth::check())
            <a href="{{ url('/home') }}">Dashboard</a>
        @elseif (Route::has('login') && !Auth::check())
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>

    <div class="background-elements"></div>

    <div class="welcome-container">
        <div class="title">{{ $title }}</div>
        <div class="subtitle">Enhance your skills with expert-led tutoring in computer science and technology</div>


        <div class="links">
            <a href="/">Welcome</a>
            <a href="/home">Home</a>
            <a href="/edulevels">Edu Levels</a>
            <a href="/programs">Programs</a>
        </div>

        <!-- Education Icons -->
        <div class="icons">
            <i class="fas fa-pencil-alt"></i>
            <i class="fas fa-book"></i>
            <i class="fas fa-chalkboard-teacher"></i>
            <i class="fas fa-graduation-cap"></i>
        </div>
    </div>

    <footer>
        © 2024 TutorIN. All rights reserved. <br> Framework Programming D Group 29
    </footer>
    
</body>
</html>
