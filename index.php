<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Leave Form System</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #111; /* Dark background */
            color: #f4f4f4;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Header Section */
        header {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, #000000, #00bcd4); /* Black to Cyan gradient */
            color: #fff;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow: hidden;
        }

        header h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 60px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 0;
            z-index: 2;
            animation: fadeIn 2s ease-out;
        }

        header p {
            font-size: 20px;
            font-weight: 300;
            margin-top: 20px;
            z-index: 2;
            opacity: 0.8;
        }

        header img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(50%);
            z-index: 1;
        }

        /* Navigation Bar */
        nav {
            background: #000; /* Solid black */
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 25px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 15px 20px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;
            display: flex;
            align-items: center;
        }

        nav ul li a i {
            margin-right: 10px; /* Space between icon and text */
            font-size: 20px;
        }

        nav ul li a:hover {
            background-color: #00bcd4; /* Cyan color */
            color: #fff;
            transform: translateY(-6px);
        }

        /* Dropdown Menu */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333; /* Darker background for dropdown */
            min-width: 180px;
            border-radius: 8px;
            z-index: 1;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 20px;
            color: #fff;
            text-decoration: none;
            display: block;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #00bcd4; /* Cyan color for dropdown */
        }

        /* Hero Section Text and Icon */
        .hero-container {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }

        .hero-container .icon {
            font-size: 80px;
            color: #fff;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        .hero-container h2 {
            font-size: 40px;
            color: #fff;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        .hero-container p {
            font-size: 20px;
            color: #f4f4f4;
            font-weight: 300;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
            margin-top: 50px;
        }

        /* Animation for fade-in effect */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        /* Bounce Animation for Icon */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 50px;
            }

            header p {
                font-size: 18px;
            }

            .hero-container h2 {
                font-size: 30px;
            }

            .hero-container p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
  <!-- Navigation Bar -->
  <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i>About Us</a></li>
            <li class="dropdown">
                <a href="#"><i class="fas fa-sign-in-alt"></i>Login <i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="login2.php">Admin Login</a>
                    <a href="login1.php">Student Login</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Header Section with Gradient Background -->
    <header>
        <img src="images/clg1.jpg" alt="College Image">
        <div class="hero-container">
            <i class="fas fa-graduation-cap icon"></i> <!-- Graduation Icon -->
            <h2>Welcome to the Student Leave Form System</h2>
        </div>
    </header>

</body>
</html>

