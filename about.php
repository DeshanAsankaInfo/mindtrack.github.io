<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <?php include 'nav.php'; ?>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #98E3B4, #3A7669);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            padding: 20px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        main {
            width: 90%;
            max-width: 1000px;
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        main h2 {
            font-size: 1.8rem;
            color: #3A7669;
            font-family: Arial, sans-serif;
            margin-bottom: 30px;
        }

        /* Introduction Section */
        .intro-section {
            margin-bottom: 40px;
            color: #555;
        }

        .intro-section p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Employee Profiles Section */
        .profiles-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Center cards within the row */
    gap: 20px;
    margin-bottom: 40px;
}

.profile-card {
    flex: 1 1 calc(33.33% - 40px); /* Three cards per row with a gap */
    max-width: 300px; /* Limit maximum width of each card */
    background: #fdfdfd;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .profile-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            object-fit: cover; 
        }

        .profile-card h3 {
            font-size: 1.2rem;
            color: #3A7669;
            margin-bottom: 5px;
        }

        .profile-card p {
            font-size: 0.9rem;
            color: #777;
        }

        .social-links a {
            color: #3A7669;
            margin: 0 8px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #98E3B4;
        }

        /* Product Section */
        .product-section {
            margin-top: 40px;
            text-align: center;
        }

        .product-section h3 {
            font-size: 1.5rem;
            color: #3A7669;
            margin-bottom: 20px;
        }

        .product-section img {
            width: 100%;
            max-width: 300px;
            margin-bottom: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-section p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

    </style>
</head>
<body>

    <main>
        <!-- Introduction Section -->
        <section class="intro-section">
            <h2>About Our Company</h2>
            <p>We are dedicated to helping individuals manage and balance their digital lives. Our mission is to empower users with tools that help reduce social media addiction and promote mental well-being. Through innovative technologies and insightful analysis, we provide personalized solutions that prioritize mental health.</p>
        </section>

        <!-- Employee Profiles Section -->
        <section class="profiles-section">
            <div class="profile-card">
                <img src="images/1.jpg" alt="Employee 1">
                <h3>Waruni Ranjala</h3>
                <p>Lead Developer</p>
                <div class="social-links">
                    <a href="waruniranjala@gmail.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://linkedin.com/in/johndoe"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/johndoe"><i class="fab fa-github"></i></a>
                    <a href="https://johndoe.com"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <!-- Repeat profile-card div for other employees -->
            <div class="profile-card">
                <img src="images/2.jpg" alt="Employee 2">
                <h3>Deshan A.</h3>
                <p>Web Developer</p>
                <div class="social-links">
                    <a href="mailto:janesmith@example.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://linkedin.com/in/janesmith"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/janesmith"><i class="fab fa-github"></i></a>
                    <a href="https://janesmith.com"><i class="fas fa-globe"></i></a>
                </div>
            </div>

            <div class="profile-card">
                <img src="images/3.jpg" alt="Employee 3">
                <h3>Janith Induwara</h3>
                <p>Data Analyst</p>
                <div class="social-links">
                    <a href="mailto:johndoe@example.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://linkedin.com/in/johndoe"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/johndoe"><i class="fab fa-github"></i></a>
                    <a href="https://johndoe.com"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <!-- Repeat profile-card div for other employees -->
            <div class="profile-card">
                <img src="images/4.jpg" alt="Employee 4">
                <h3>Himaya Chamudini</h3>
                <p>Research Lead</p>
                <div class="social-links">
                    <a href="mailto:janesmith@example.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://linkedin.com/in/janesmith"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/janesmith"><i class="fab fa-github"></i></a>
                    <a href="https://janesmith.com"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="profile-card">
                <img src="images/5.jpg" alt="Employee 5">
                <h3>Yasith Wijekoon</h3>
                <p>Project Analyst</p>
                <div class="social-links">
                    <a href="mailto:janesmith@example.com"><i class="fas fa-envelope"></i></a>
                    <a href="https://linkedin.com/in/janesmith"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/janesmith"><i class="fab fa-github"></i></a>
                    <a href="https://janesmith.com"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <!-- Add more profiles as needed -->
        </section>

        <!-- Product Section -->
        <section class="product-section">
            <h3>Our Product</h3>
            <img src="images/logo.png" alt="Mind Track">
            <p>"Mind Track" is our innovative solution designed to help users track and manage their social media usage. It provides insights into user behavior and offers personalized recommendations to foster a healthier digital experience.</p>
        </section>
    </main>

</body>
</html>
<?php include 'footer.php'; ?>
