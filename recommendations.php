<?php
include 'nav.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        main {
            width: 90%;
            max-width: 800px;
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        main h2 {
            font-size: 1.8rem;
            color: #3A7669;
            font-family: Arial, sans-serif;
            margin-bottom: 30px;
        }

        /* Celebration Message */
        .celebration-message {
            font-size: 1.2rem;
            color: #FF9800; /* Enhanced color for emphasis */
            font-weight: bold;
            margin-bottom: 20px;
            animation: pop 1s ease-in-out;
        }

        /* Recommendations List Styling */
        .recommendations-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .recommendation-card {
            display: flex;
            align-items: center;
            background: #fdfdfd;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .recommendation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .recommendation-icon {
            font-size: 2rem;
            color: #3A7669;
            margin-right: 15px;
            min-width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .recommendation-text {
            font-size: 1rem;
            color: #555;
            text-align: left;
        }

        /* Confetti Animation */
        .confetti {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10;
            overflow: hidden;
            animation: fadeOut 5s ease 10s forwards; /* Fade out after 10 seconds */
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #FFDD57;
            opacity: 0.8;
            animation: fall linear infinite;
            border-radius: 50%;
        }

        @keyframes fall {
            0% { transform: translateY(-100%) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
        }

        @keyframes pop {
            0% { transform: scale(0.8); opacity: 0.5; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); }
        }

        @keyframes fadeOut {
            to { opacity: 0; }
        }
    </style>
</head>
<body>
    <main>
        <h2>Recommendations for Managing Social Media Addiction</h2>

        <div id="celebrationMessage" class="celebration-message" style="display: none;">
            🎉 Great job! You’re maintaining a healthy balance with social media. 🎉
        </div>

        <!-- Recommendations List -->
        <div class="recommendations-list" id="recommendationsList">
            <!-- Recommendations will be inserted here dynamically -->
        </div>

        <!-- Confetti Animation -->
        <div class="confetti" id="confetti" style="display: none;"></div>
    </main>

    <script>
        const userData = <?php echo isset($_SESSION['userData']) ? json_encode($_SESSION['userData']) : 'null'; ?>;
        const isUserAtRisk = userData && (
            userData.daily_usage_time > 120 ||
            userData.posts_per_day > 5 ||
            userData.likes_received_per_day > 20 ||
            userData.dominant_emotion === 'Anxiety' ||
            userData.dominant_emotion === 'Sadness'
        );

        // Tailored Recommendations Based on Specific Risk Factors
        const riskRecommendations = [];

        if (userData) {
            if (userData.daily_usage_time > 120) {
                riskRecommendations.push({ icon: 'fas fa-stopwatch', text: 'You’re spending a lot of time on social media. Try limiting your screen time to prevent addiction.' });
            }
            if (userData.posts_per_day > 5) {
                riskRecommendations.push({ icon: 'fas fa-bullseye', text: 'Reduce your posts to avoid over-engagement. Consider setting daily posting limits.' });
            }
            if (userData.likes_received_per_day > 20) {
                riskRecommendations.push({ icon: 'fas fa-heart', text: 'Try reducing your focus on likes to avoid seeking constant validation online.' });
            }
            if (userData.dominant_emotion === 'Anxiety' || userData.dominant_emotion === 'Sadness') {
                riskRecommendations.push({ icon: 'fas fa-heartbeat', text: 'Negative emotions detected. Practice mindfulness or relaxation exercises to improve your mood.' });
            }
        }

        // Positive recommendations for users who are not at risk
        const positiveRecommendations = [
            { icon: 'fas fa-walking', text: 'Keep exploring offline hobbies and continue practicing healthy digital habits.' },
            { icon: 'fas fa-grin-alt', text: 'Staying mindful about screen time can help maintain your well-being. Keep it up!' },
        ];

        // General recommendations for healthy users without specific risks
        const defaultRecommendations = [
            { icon: 'fas fa-clock', text: 'Limit daily social media usage time.' },
            { icon: 'fas fa-leaf', text: 'Engage in offline hobbies and activities.' },
            { icon: 'fas fa-bullseye', text: 'Set goals to reduce the number of posts or interactions per day.' },
            { icon: 'fas fa-chart-line', text: 'Use social media tracking tools to monitor usage.' },
            { icon: 'fas fa-pause-circle', text: 'Consider taking regular social media breaks.' },
        ];

        const recommendationsList = document.getElementById('recommendationsList');
        const celebrationMessage = document.getElementById('celebrationMessage');
        const confettiContainer = document.getElementById('confetti');
        const recommendations = userData
            ? (isUserAtRisk ? riskRecommendations : positiveRecommendations)
            : defaultRecommendations;

        // Show celebration message and confetti if user is not at risk
        if (!isUserAtRisk && userData) {
            celebrationMessage.style.display = 'block';
            confettiContainer.style.display = 'block';
            createConfetti();
        }

        // Render recommendations
        recommendations.forEach(rec => {
            const recommendationCard = document.createElement('div');
            recommendationCard.className = 'recommendation-card';

            const icon = document.createElement('div');
            icon.className = `recommendation-icon ${rec.icon}`;
            recommendationCard.appendChild(icon);

            const text = document.createElement('div');
            text.className = 'recommendation-text';
            text.innerText = rec.text;
            recommendationCard.appendChild(text);

            recommendationsList.appendChild(recommendationCard);
        });

        // Confetti creation function with a longer timeout to remove confetti after 10 seconds
        function createConfetti() {
            for (let i = 0; i < 100; i++) {
                const confettiPiece = document.createElement('div');
                confettiPiece.className = 'confetti-piece';
                confettiPiece.style.left = `${Math.random() * 100}%`;
                confettiPiece.style.backgroundColor = `hsl(${Math.random() * 360}, 100%, 70%)`;
                confettiPiece.style.animationDuration = `${Math.random() * 3 + 2}s`;
                confettiContainer.appendChild(confettiPiece);
            }
            setTimeout(() => confettiContainer.style.display = 'none', 10000); // Stops animation after 10 seconds
        }
    </script>
</body>
</html>
<?php include 'footer.php'; ?>
