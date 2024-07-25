<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
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
            background: #2c3e50;
            color: #fff;
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
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 350px;
            margin: 20px;
            text-align: center;
        }

        .progress-bar {
            width: 100%;
            background: rgba(255, 255, 255, 0.3);
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
            font-family: 'Patrick Hand', cursive;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 16px;
            color: #fff;
        }

        input[type="text"], input[type="email"], input[type="number"], select {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
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
            font-family: 'Roboto', sans-serif;
        }

        .navigation button:hover {
            background: #218838;
            transform: scale(1.02);
        }

        .intro {
            text-align: center;
        }

        .intro h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .intro p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .start-button {
            background: #28a745;
            border: none;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 8px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .start-button:hover {
            background: #218838;
            transform: scale(1.05);
        }

        .gender-options {
            display: flex;
            justify-content: space-around;
            margin: 10px 0 15px;
        }

        .gender-options label {
            font-size: 16px;
            cursor: pointer;
        }

        .gender-options input {
            display: none;
        }

        .gender-options input:checked + span {
            background: #28a745;
            color: #fff;
            padding: 8px 12px;
            border-radius: 8px;
        }

        .multiple-select {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .multiple-select label {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .multiple-select input {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div id="solar-system"></div>

<div class="glass intro active" id="intro">
    <img src="your-logo.png" alt="Company Logo" width="150">
    <h1>Welcome to Our Registration Form</h1>
    <p>Get started by clicking the button below to fill out your details.</p>
    <button class="start-button" id="startButton">Start</button>
</div>

<div class="progress-bar">
    <div class="progress" id="progress"></div>
</div>

<form id="form1" class="glass">
    <h1>Step 1</h1>
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name" required>
    <div class="navigation">
        <button type="button" id="next1" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form2" class="glass">
    <h1>Step 2</h1>
    <label>Gender</label>
    <div class="gender-options">
        <label>
            <input type="radio" name="gender" value="male" required>
            <span>Male</span>
        </label>
        <label>
            <input type="radio" name="gender" value="female" required>
            <span>Female</span>
        </label>
        <label>
            <input type="radio" name="gender" value="other" required>
            <span>Other</span>
        </label>
    </div>
    <div class="navigation">
        <button type="button" id="prev1" class="arrow-button">←</button>
        <button type="button" id="next2" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form3" class="glass">
    <h1>Step 3</h1>
    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" required pattern="\d{10}">
    <div class="navigation">
        <button type="button" id="prev2" class="arrow-button">←</button>
        <button type="button" id="next3" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form4" class="glass">
    <h1>Step 4</h1>
    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required>
    <div class="navigation">
        <button type="button" id="prev3" class="arrow-button">←</button>
        <button type="button" id="next4" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form5" class="glass">
    <h1>Step 5</h1>
    <label for="class">Select Your Grade</label>
    <select id="class" name="class" required>
        <option value="">Select Class</option>
        <option value="6">Class 6</option>
        <option value="7">Class 7</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
        <option value="11">Class 11</option>
        <option value="12">Class 12</option>
    </select>
    <div class="navigation">
        <button type="button" id="prev4" class="arrow-button">←</button>
        <button type="button" id="next5" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form6" class="glass">
    <h1>Step 6</h1>
    <label>Choose the Subject(s) for Offline Class</label>
    <div class="multiple-select">
        <label><input type="checkbox" name="subject" value="mathematics"> Mathematics</label>
        <label><input type="checkbox" name="subject" value="science"> Science</label>
        <label><input type="checkbox" name="subject" value="physics"> Physics</label>
        <label><input type="checkbox" name="subject" value="chemistry"> Chemistry</label>
        <label><input type="checkbox" name="subject" value="biology"> Biology</label>
    </div>
    <div class="navigation">
        <button type="button" id="prev5" class="arrow-button">←</button>
        <button type="button" id="next6" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form7" class="glass">
    <h1>Step 7</h1>
    <label>Are You Willing to Prepare for Any Competitive Exam?</label>
    <div class="gender-options">
        <label>
            <input type="radio" name="competitive_exam" value="yes" required>
            <span>Yes</span>
        </label>
        <label>
            <input type="radio" name="competitive_exam" value="no" required>
            <span>No</span>
        </label>
    </div>
    <div class="navigation">
        <button type="button" id="prev6" class="arrow-button">←</button>
        <button type="button" id="next7" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form8" class="glass">
    <h1>Step 8</h1>
    <label for="exam_name">If Yes, Please Write the Exam Name</label>
    <input type="text" id="exam_name" name="exam_name">
    <div class="navigation">
        <button type="button" id="prev7" class="arrow-button">←</button>
        <button type="button" id="next8" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form9" class="glass">
    <h1>Step 9</h1>
    <label for="parent_first_name">Parent's First Name</label>
    <input type="text" id="parent_first_name" name="parent_first_name" required>
    <label for="parent_last_name">Parent's Last Name</label>
    <input type="text" id="parent_last_name" name="parent_last_name" required>
    <label for="parent_phone">Parent's Phone Number</label>
    <input type="text" id="parent_phone" name="parent_phone" required pattern="\d{10}">
    <div class="navigation">
        <button type="button" id="prev8" class="arrow-button">←</button>
        <button type="button" id="next9" class="arrow-button" disabled>→</button>
    </div>
</form>

<form id="form10" class="glass">
    <h1>Step 10</h1>
    <label for="society">Please Select Your Society Name</label>
    <select id="society" name="society" required>
        <option value="">Select Society</option>
        <option value="mahagun_mywoods">Mahagun Mywoods</option>
        <option value="gaur_7th_avenue">Gaur 7th Avenue</option>
        <option value="gaur_14th_avenue">Gaur's 14th Avenue</option>
        <option value="panchsheel_green_1_2">Panchsheel Green 1 & 2</option>
    </select>
    <div class="navigation">
        <button type="button" id="prev9" class="arrow-button">←</button>
        <button type="submit" class="arrow-button">Submit</button>
    </div>


     <script>
    const forms = document.querySelectorAll('form');
    const progress = document.getElementById('progress');
    const nextButtons = document.querySelectorAll('button[id^="next"]');
    const prevButtons = document.querySelectorAll('button[id^="prev"]');
    const startButton = document.getElementById('startButton');
    const intro = document.getElementById('intro');
    let currentForm = 0;

    startButton.addEventListener('click', () => {
        intro.style.display = 'none';
        forms[currentForm].classList.add('active');
        updateProgress();
    });

    nextButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            if (validateForm(forms[currentForm])) {
                forms[currentForm].classList.remove('active');
                currentForm = (index + 1);
                forms[currentForm].classList.add('active');
                updateProgress();
            }
        });

        forms[index].addEventListener('input', () => {
            button.disabled = !validateForm(forms[currentForm]);
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

    function validateForm(form) {
        return form.checkValidity();
    }

    // Initial validation check for disabling/enabling next buttons
    forms.forEach((form, index) => {
        const nextButton = form.querySelector(`button[id^="next"]`);
        if (nextButton) {
            nextButton.disabled = !validateForm(form);
        }
    });
</script>

</body>
</html>
