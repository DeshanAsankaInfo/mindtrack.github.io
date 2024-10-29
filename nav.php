<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Addiction Prediction</title>
    <style>
        /* Reset and body styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #FDFDFD; /* Light white background */
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Centered Navbar Styles */
        .navbar-container {
            display: flex;
            justify-content: center;
            position: fixed;
            top: 20px; /* Position from top */
            width: 100%;
            z-index: 1000;
    
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%; /* Navbar width */
            max-width: 1000px; /* Limit the width */
            padding: 5px 20px;
            background: rgba(255, 255, 255, 0.7); /* Transparent white background */
            backdrop-filter: blur(20px); /* Stronger blur effect */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Softer shadow */
        }

        .logo-container .logo {
            height: 40px;
            transition: transform 0.3s ease;
            
        }

        .logo-container .logo:hover {
            transform: scale(1.1);
        }

        .nav-links {
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        .nav-links a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s, transform 0.3s ease;
        }

        .nav-links a:hover {
            color: #008000; /* Light green on hover */
            transform: scale(1.1);
        }
        /* Smooth scrolling animation */
        html {
            scroll-behavior: smooth;
        }

        /* Animation for navbar appearance */
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        .navbar {
            animation: slideDown 0.5s ease forwards;
        }

        /* Main content styling */
        main {
            padding: 100px 20px; /* Add padding to avoid overlap with fixed navbar */
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <!-- Centered Navigation Bar Wrapper -->
    <div class="navbar-container">
        <header class="navbar">
            <div class="logo-container">
                <img href="index.html" src="images/logo.png" alt="Company Logo" class="logo">
            </div>
            <nav class="nav-links">
                <a href="index.php">Home</a>
                <a href="prediction.php">Prediction</a>
                <a href="visualization.php">Visualization</a>
                <a href="recommendations.php">Recommendations</a>
                <a href="about.php">About Us</a>
            </nav>
        
        </header>
    </div>
</body>
</html>
