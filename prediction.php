<?php 
include 'nav.php';
session_start();
?>

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
        overflow-x: hidden;
    }

    /* Main Container */
    main {
        padding: 50px 20px;
        max-width: 600px;
        margin: 100px auto;
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        color: #333;
        
    }

    h2 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #3A7669;
        margin-bottom: 15px;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    label {
        font-size: 0.85rem;
        color: #3A7669;
    }

    input[type="number"],
    select {
        width: 100%;
        padding: 8px;
        font-size: 0.9rem;
        border: 1px solid #E9DBC4;
        border-radius: 8px;
        outline: none;
        transition: border-color 0.3s;
    }

    input[type="number"]:focus,
    select:focus {
        border-color: #98E3B4;
    }

    /* Buttons styling */
    .form-buttons {
        grid-column: span 2;
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 15px;
    }

    button {
        padding: 8px 16px;
        border: none;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 45%;
    }

    button[type="button"] {
        background-color: #3A7669;
        color: #FFFFFF;
    }

    button[type="button"]:hover {
        background-color: #98E3B4;
    }

    button[type="reset"] {
        background-color: #E9DBC4;
        color: #3A7669;
    }

    button[type="reset"]:hover {
        background-color: #F5A846;
    }

    #predictionResult {
        grid-column: span 2;
        margin-top: 10px;
        font-size: 1rem;
        font-weight: bold;
        color: #3A7669;
        text-align: center;
    }
</style>
<main>
    <h2>Predict Social Media Addiction Risk</h2>
    <form id="predictionForm" onsubmit="return false;">
        <!-- Input fields -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <label for="daily_usage_time">Daily Usage (min):</label>
        <input type="number" id="daily_usage_time" name="daily_usage_time" required>

        <label for="posts_per_day">Posts Made/Day:</label>
        <input type="number" id="posts_per_day" name="posts_per_day" required>

        <label for="likes_received_per_day">Likes Received/Day:</label>
        <input type="number" id="likes_received_per_day" name="likes_received_per_day" required>

        <label for="comments_received_per_day">Comments Received/Day:</label>
        <input type="number" id="comments_received_per_day" name="comments_received_per_day" required>

        <label for="messages_sent_per_day">Messages Sent/Day:</label>
        <input type="number" id="messages_sent_per_day" name="messages_sent_per_day" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Non-binary">Non-binary</option>
        </select>

        <label for="platform">Social Media Platform Used:</label>
        <select id="platform" name="platform">
            <option value="Instagram">Instagram</option>
            <option value="Twitter">Twitter</option>
            <option value="Snapchat">Snapchat</option>
            <option value="Whatsapp">Whatsapp</option>
            <option value="Telegram">Telegram</option>
            <option value="LinkedIn">LinkedIn</option>
            <option value="Facebook">Facebook</option>
        </select>

        <label for="dominant_emotion">Emotion:</label>
        <select id="dominant_emotion" name="dominant_emotion">
            <option value="Happiness">Happiness</option>
            <option value="Neutral">Neutral</option>
            <option value="Anxiety">Anxiety</option>
            <option value="Boredom">Boredom</option>
            <option value="Sadness">Sadness</option>
        </select>

        <div class="form-buttons">
            <button type="button" onclick="makePrediction()">Predict</button>
            <button type="button" onclick="resetData()">Reset</button>
        </div>
    </form>
    <div id="predictionResult"></div>

    <script>
        // Function to save form data to localStorage
        function saveFormData() {
            const formData = {
                age: document.getElementById('age').value,
                daily_usage_time: document.getElementById('daily_usage_time').value,
                posts_per_day: document.getElementById('posts_per_day').value,
                likes_received_per_day: document.getElementById('likes_received_per_day').value,
                comments_received_per_day: document.getElementById('comments_received_per_day').value,
                messages_sent_per_day: document.getElementById('messages_sent_per_day').value,
                gender: document.getElementById('gender').value,
                platform: document.getElementById('platform').value,
                dominant_emotion: document.getElementById('dominant_emotion').value
            };
            localStorage.setItem('formData', JSON.stringify(formData));
        }

        // Function to load form data from localStorage
        function loadFormData() {
            const savedData = JSON.parse(localStorage.getItem('formData'));
            if (savedData) {
                document.getElementById('age').value = savedData.age;
                document.getElementById('daily_usage_time').value = savedData.daily_usage_time;
                document.getElementById('posts_per_day').value = savedData.posts_per_day;
                document.getElementById('likes_received_per_day').value = savedData.likes_received_per_day;
                document.getElementById('comments_received_per_day').value = savedData.comments_received_per_day;
                document.getElementById('messages_sent_per_day').value = savedData.messages_sent_per_day;
                document.getElementById('gender').value = savedData.gender;
                document.getElementById('platform').value = savedData.platform;
                document.getElementById('dominant_emotion').value = savedData.dominant_emotion;
            }
        }

        // Call loadFormData on page load
        window.onload = loadFormData;

        // Attach saveFormData to input and select change events
        document.querySelectorAll('#predictionForm input, #predictionForm select').forEach(element => {
            element.addEventListener('change', saveFormData);
        });

        async function makePrediction() {
            const data = {
                age: parseInt(document.getElementById('age').value),
                daily_usage_time: parseInt(document.getElementById('daily_usage_time').value),
                posts_per_day: parseInt(document.getElementById('posts_per_day').value),
                likes_received_per_day: parseInt(document.getElementById('likes_received_per_day').value),
                comments_received_per_day: parseInt(document.getElementById('comments_received_per_day').value),
                messages_sent_per_day: parseInt(document.getElementById('messages_sent_per_day').value),
                gender: document.getElementById('gender').value,
                platform: document.getElementById('platform').value,
                dominant_emotion: document.getElementById('dominant_emotion').value,
            };

            // Send data to API for prediction
            const response = await fetch('https://socialmediafastapi-b7c77c3ed457.herokuapp.com/predict', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data),
            });

            const result = await response.json();
            document.getElementById('predictionResult').innerText = `Prediction: ${result.prediction}`;

            // Store user data in session for persistent visualization
            await fetch('save_to_session.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ ...data, prediction: result.prediction }),
            });
        }

        async function resetData() {
            // Clear session and localStorage data on reset
            await fetch('reset_session.php', {
                method: 'POST'
            });
            localStorage.removeItem('formData');
            location.reload(); // Refresh page to clear results
        }
    </script>
</main>

<?php include 'footer.php'; ?>