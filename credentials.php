<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: linear-gradient(to bottom, #87CEEB, #00BFFF);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px; /* Add padding for better mobile readability */
        }

        h1 {
            font-size: 24pt;
            text-align: center;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background: linear-gradient(to bottom, blue, white);
            padding: 10px 20px;
            font-size: 16pt;
            color: black;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s;
            display: block;
            margin-top: 15px;
        }

        .button:hover {
            background: linear-gradient(to bottom, white, blue);
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form id="registrationForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="id_number">SA ID Number:</label>
        <input type="text" id="id_number" name="id_number" required>

        <label for="school">School Name:</label>
        <input type="text" id="school" name="school" required>

        <button type="submit" class="button">Submit</button>
    </form>

    <script>
        // JavaScript for form submission
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();
            // Redirect to "complete.html" when the form is submitted
            window.location.href = "complete.html";
        });
    </script>
</body>
</html>
