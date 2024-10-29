<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health - Hero Section</title>
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
            min-height: 100vh;
            background: linear-gradient(135deg, #98E3B4, #3A7669);
        }

        /* Hero Section with Full Background */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 60px;
            width: 100%;
            height: 100vh; /* Full viewport height */
            background-image: url('images/cover.png'); /* Full background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #FFFFFF;
            position: relative;
            z-index: 1;
        }

        /* Overlay for Text Contrast */
        .hero::before {
       
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(30, 30, 60, 0.3); /* Slight dark overlay */
            z-index: -1;
        }

        /* Hero Content */
        .hero-content {
            max-width: 600px;
            z-index: 1;
            color: #FFFFFF;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: bold;
            line-height: 1.2;
            color: #FFFFFF;
            margin-bottom: 20px;
        }

        .hero-content h1 span {
            color: #3A7669; /* Emphasize the word 'Health' */
        }

        .hero-content p {
            margin: 20px 0;
            font-size: 1.11rem;
            line-height: 1.6;
            color: #FFFFFF;
        }

        .hero-content .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #FFFFFF;
            color: #3A7669;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .hero-content .btn:hover {
            background-color: #98E3B4; /* Button hover color */
        }

 /* Contact Us Section */
 .contact-section {
        background-color: #fff;
        padding: 60px 20px;
        text-align: center;
    }

    .contact-section h2 {
        color: #3A7669;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .contact-section p {
        color: #555;
        font-size: 1rem;
        max-width: 700px;
        margin: 0 auto 40px auto;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #3A7669;
        font-size: 1.1rem;
    }

    .contact-item i {
        font-size: 1.5rem;
        color: #98E3B4;
    }

    .contact-item span {
        font-weight: bold;
        color: #555;
    }

    .contact-item a {
        color: #3A7669;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-item a:hover {
        color: #98E3B4;
    }

    /* About Us Section */
    .about-section {
        background-color: #e9dbc4;
        padding: 60px 20px;
        text-align: center;
    }

    .about-section h2 {
        color: #3A7669;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .about-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        max-width: 800px;
        margin: 0 auto;
    }

    /* Text Styling */
    .about-text {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
        text-align: left;
    }

    .about-text p {
        margin-bottom: 20px;
    }

    /* Image Styling */
    .about-image {
        max-width: 400px;
        width: 100%;
    }

    .about-image img {
        width: 160%;
            }

    /* Responsive Layout */
    @media (min-width: 768px) {
        .about-content {
            flex-direction: row;
            align-items: flex-start;
        }

        .about-text {
            width: 60%;
            padding-right: 20px;
        }

        .about-image {
            width: 40%;
        }
    }


    /* Our Services Section */
    .services-section {
        background-color: #f8f9fa;
        padding: 60px 20px;
        text-align: center;
    }

    .services-section h2 {
        color: #3A7669;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .services-section p {
        color: #555;
        font-size: 1rem;
        max-width: 700px;
        margin: 0 auto 40px auto;
    }

    /* Services Container */
    .services-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    /* Service Card */
    .service-card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px 20px;
        width: 100%;
        max-width: 250px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    /* Icon Styling */
    .service-icon {
        font-size: 2.5rem;
        color: #3A7669;
        margin-bottom: 15px;
    }

    .service-card h3 {
        font-size: 1.3rem;
        color: #3A7669;
        margin-bottom: 10px;
    }

    .service-card p {
        color: #555;
        font-size: 1rem;
        line-height: 1.5;
    }
    </style>
</head>
<body>
    <section class="hero">
        <!-- Content Section -->
        <div class="hero-content">
            <h1>Balance Your <span>Digital Life</span></h1>
            <p>Explore personalized insights and recommendations designed to support a healthier, more balanced relationship with social media. Take the first step towards prioritizing your mental wellness in a connected world</p>
            <a href="prediction.php" class="btn">Start</a>
        </div>
    </section>
    <section class="services-section">
    <h2>Our Services</h2>
    <p>Our range of services is designed to help you manage mental health and social media usage effectively.</p>
    <div class="services-container">
        <div class="service-card">
            <i class="fas fa-brain service-icon"></i>
            <h3>Prediction</h3>
            <p>Get insights on your social media usage and addiction risk with advanced analytics.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-chart-bar service-icon"></i>
            <h3>Visualization</h3>
            <p>Understand your usage patterns through interactive charts and in-depth analysis.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-user-check service-icon"></i>
            <h3>Personalized Recommendations</h3>
            <p>Receive customized advice to improve mental health and manage social media usage.</p>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-section">
    <h2>About Us</h2>
    <div class="about-content">
        <div class="about-text">
            <p>At Mind Track, our mission is to empower individuals in managing their mental health and balancing their social media usage. We believe in creating innovative tools that provide insights into digital behavior, enabling users to make informed decisions for their well-being. Our dedicated team is committed to developing personalized solutions that address the unique challenges of the digital age.</p>
            <p>Our vision is to create a world where technology promotes mental wellness. We strive to inspire change and foster a healthy digital lifestyle for everyone.</p>
        </div>
        <div class="about-image">
            <img src="images/about-us.svg" alt="Our Team" />
        </div>
    </div>
</section>
    <!-- Contact Us Section -->
<section class="contact-section">
    <h2>Contact Us</h2>
    <p>Reach out to us for more information about our services or any assistance you may need.</p>
    <div class="contact-info">
        <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>Email:</span> <a href="mailto:info@mindtrack.com">info@mindtrack.com</a>
        </div>
        <div class="contact-item">
            <i class="fas fa-phone"></i>
            <span>Phone:</span> <a href="tel:+94112224596">+94 112224596</a>
        </div>
        <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <span>Address:</span> No.422/A, Weliwita Rd, Malabe, Sri Lanka.
        </div>
    </div>
</section>

</body>
</html>
<?php include 'footer.php'; ?>
