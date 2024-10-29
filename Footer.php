<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Footer Styling */
        footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 25px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            color: #333;
            backdrop-filter: blur(15px);
            width: 100%;
            margin-top: 50px ;
            font-family: 'Roboto', sans-serif;
        }

        footer nav ul {
            display: flex;
            gap: 25px;
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }

        footer nav ul li {
            font-weight: 500;
        }

        footer nav ul li a {
            color: #333;
            text-decoration: none;
            font-size: 1em;
            padding: 5px 10px;
            transition: color 0.3s ease;
        }

        footer nav ul li a:hover {
            color: #F5A846;
        }

        /* Social Media Icons */
        .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .social-icons a {
            color: #333;
            font-size: 1.5em;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #98E3B4;
        }

        /* Footer Text */
        footer p {
            font-size: 0.9em;
            margin-top: 15px;
            color: #555;
            font-weight: 300;
        }
    </style>
</head>
<body>

<!-- Footer -->
<footer>
    <!-- Footer Navigation Links -->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="prediction.php">Prediction</a></li>
            <li><a href="visualization.php">Visualization</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>

    <!-- Social Media Links -->
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>

    <!-- Footer Text -->
    <p>&copy; 2024 MindTrack. All rights reserved.</p>
</footer>

</body>
</html>
