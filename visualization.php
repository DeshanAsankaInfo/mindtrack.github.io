<?php
include 'nav.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualization</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            overflow-x: hidden;
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
        }

        main h2 {
            font-size: 1.5rem;
            color: #3A7669;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <main>
        <h2 id="chartTitle">Usage Pattern Analysis</h2>

        <!-- Bar Chart: Detailed Usage -->
        <canvas id="userUsageChart" width="400" height="200"></canvas>

        <!-- Radar Chart: Activity Type Distribution -->
        <canvas id="activityDistributionChart" width="400" height="200" style="margin-top: 40px;"></canvas>

        <script>
            const userData = <?php echo isset($_SESSION['userData']) ? json_encode($_SESSION['userData']) : 'null'; ?>;
            const isUserDataAvailable = userData !== null;

            // Default healthy usage values
            const defaultData = {
                daily_usage_time: 60, // minutes
                posts_per_day: 1,
                likes_received_per_day: 5,
                comments_received_per_day: 3,
                messages_sent_per_day: 10,
                description: 'Healthy social media usage'
            };

            // Use user data if available, otherwise use default values
            const displayData = isUserDataAvailable ? userData : defaultData;

            // Update chart title based on data availability
            document.getElementById('chartTitle').innerText = isUserDataAvailable ? `Usage on ${displayData.platform}` : 'Healthy Person Normal Usage';

            // Bar Chart showing User or Healthy Usage
            const ctx1 = document.getElementById('userUsageChart').getContext('2d');
            const userUsageChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Usage Time (hrs)', 'Posts', 'Likes', 'Comments', 'Messages'],
                    datasets: [{
                        label: isUserDataAvailable ? `Usage on ${displayData.platform}` : 'Healthy Person Normal Usage',
                        data: [
                            displayData.daily_usage_time / 60, // Convert to hours
                            displayData.posts_per_day,
                            displayData.likes_received_per_day,
                            displayData.comments_received_per_day,
                            displayData.messages_sent_per_day
                        ],
                        backgroundColor: isUserDataAvailable ? 'rgba(54, 162, 235, 0.6)' : 'rgba(75, 192, 192, 0.6)',
                        borderColor: isUserDataAvailable ? 'rgba(54, 162, 235, 1)' : 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: '#3A7669'
                            }
                        },
                        x: {
                            ticks: {
                                color: '#3A7669'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#3A7669'
                            }
                        }
                    }
                }
            });

            // Radar Chart showing Activity Distribution
            const ctx2 = document.getElementById('activityDistributionChart').getContext('2d');
            const activityData = [displayData.posts_per_day, displayData.likes_received_per_day, displayData.comments_received_per_day, displayData.messages_sent_per_day];
            const activityDistributionChart = new Chart(ctx2, {
                type: 'radar',
                data: {
                    labels: ['Posts', 'Likes', 'Comments', 'Messages'],
                    datasets: [{
                        label: isUserDataAvailable ? 'User Activity' : 'Healthy Usage Activity',
                        data: activityData,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        r: {
                            ticks: {
                                color: '#3A7669',
                                backdropColor: 'rgba(0,0,0,0)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: '#3A7669'
                            }
                        }
                    }
                }
            });
        </script>
    </main>
</body>
</html>
<?php include 'footer.php'; ?>
