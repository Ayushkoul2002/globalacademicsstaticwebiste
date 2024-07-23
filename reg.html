<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Patrick+Hand:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background: #2c3e50; /* Dark background for contrast */
            color: #fff;
            font-family: 'Patrick Hand', cursive; /* Handwriting font for headings */
        }

        #solar-system {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(44,62,80,1) 100%);
            overflow: hidden;
            z-index: -1;
        }

        .glass {
            background: rgba(255, 255, 255, 0.1); /* Glassmorphism effect */
            backdrop-filter: blur(10px); /* Blur effect for glassmorphism */
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 350px;
            margin: 20px;
            text-align: center; /* Center text inside the form */
        }

        .progress-bar {
            width: 100%;
            background: rgba(255, 255, 255, 0.3); /* Transparent background */
            border-radius: 5px;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            height: 10px;
            z-index: 1;
        }

        .progress {
            width: 0;
            height: 100%;
            background: #28a745;
            transition: width 0.3s;
        }

        form {
            display: none;
        }

        form.active {
            display: block;
        }

        h1 {
            margin-bottom: 20px;
            color: #fff;
            font-family: 'Patrick Hand', cursive; /* Handwriting font for headings */
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 16px;
            color: #fff;
        }

        input[type="text"], input[type="email"], input[type="number"], select {
            width: calc(100% - 20px); /* Adjust width to fit padding */
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="number"]:focus, select:focus {
            border-color: #28a745;
            box-shadow: 0 0 8px rgba(40, 167, 69, 0.5);
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .navigation button {
            width: 48%;
            padding: 12px;
            background: #28a745;
            border: none;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s, transform 0.3s;
            font-family: 'Roboto', sans-serif; /* Roboto font for buttons */
        }

        .navigation button:hover {
            background: #218838;
            transform: scale(1.02);
        }

        .arrow-button {
            font-size: 20px; /* Adjust size for arrow icons */
        }
    </style>
</head>
<body>
    <div id="solar-system">
        <div class="planet planet1"></div>
        <div class="planet planet2"></div>
    </div>

    <div class="progress-bar">
        <div class="progress" id="progress"></div>
    </div>

    <form id="form1" class="glass active">
        <h1>Step 1</h1>
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
        <div class="navigation">
            <button type="button" id="next1" class="arrow-button">→</button>
        </div>
    </form>

    <form id="form2" class="glass">
        <h1>Step 2</h1>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <div class="navigation">
            <button type="button" id="prev1" class="arrow-button">←</button>
            <button type="button" id="next2" class="arrow-button">→</button>
        </div>
    </form>

    <form id="form3" class="glass">
        <h1>Step 3</h1>
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required pattern="\d{10}">
        <div class="navigation">
            <button type="button" id="prev2" class="arrow-button">←</button>
            <button type="button" id="next3" class="arrow-button">→</button>
        </div>
    </form>

    <form id="form4" class="glass">
        <h1>Step 4</h1>
        <label for="class">Class</label>
        <select id="class" name="class" required>
            <option value="">Select Class</option>
            <option value="6">6th</option>
            <option value="7">7th</option>
            <option value="8">8th</option>
            <option value="9">9th</option>
            <option value="10">10th</option>
            <option value="11">11th</option>
            <option value="12">12th</option>
        </select>
        <div class="navigation">
            <button type="button" id="prev3" class="arrow-button">←</button>
            <button type="submit" class="arrow-button">Submit</button>
        </div>
    </form>

    <script>
        const forms = document.querySelectorAll('form');
        const progress = document.getElementById('progress');
        const nextButtons = document.querySelectorAll('button[id^="next"]');
        const prevButtons = document.querySelectorAll('button[id^="prev"]');
        let currentForm = 0;

        nextButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                forms[currentForm].classList.remove('active');
                currentForm = (index + 1);
                forms[currentForm].classList.add('active');
                updateProgress();
            });
        });

        prevButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                forms[currentForm].classList.remove('active');
                currentForm = index;
                forms[currentForm].classList.add('active');
                updateProgress();
            });
        });

        function updateProgress() {
            progress.style.width = ((currentForm + 1) / forms.length) * 100 + '%';
        }
    </script>
</body>
</html>
