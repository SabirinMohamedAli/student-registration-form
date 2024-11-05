<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        h1 {
            font-size: 2em;
            color: #fff;
            margin-bottom: 20px;
            text-align: center;
            animation: fadeIn 1.5s ease;
        }

        form {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            animation: slideIn 1s ease forwards;
        }

        fieldset {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            color: #6e8efb;
            font-weight: bold;
            padding: 0 10px;
            background: #ffffff;
            border-radius: 5px;
            text-transform: uppercase;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #6e8efb;
            box-shadow: 0 0 8px rgba(110, 142, 251, 0.3);
            outline: none;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            color: #fff;
            margin-right: 10px;
            background: #6e8efb;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: #a777e3;
            transform: scale(1.05);
        }

        /* Responsive design */
        @media (max-width: 600px) {
            form {
                padding: 15px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    
<h1>Student Registration</h1>

<form action="form_handling.php" method="post">
    <fieldset>
        <legend>Registration Form</legend>

        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label for="pob">Place of Birth:</label>
        <input type="text" name="pob" placeholder="Enter your place of birth">

        <label for="phone">Phone:</label>
        <input type="number" name="phone" placeholder="Enter your phone number">

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female

        <label for="faculty">Faculty:</label>
        <select name="faculty" id="faculty">
            <option value="CIT">Computer & IT</option>
            <option value="EE">Engineering</option>
            <option value="MD">Medicine</option>
            <option value="ECOM">Economic</option>
        </select>

        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Travelling"> Travelling
        <input type="checkbox" name="hobbies[]" value="Exercise"> Exercise
        <input type="checkbox" name="hobbies[]" value="Swimming"> Swimming
        <input type="checkbox" name="hobbies[]" value="Movies"> Movies

        <label for="languages">Languages:</label>
        <select name="languages[]" multiple size="5">
            <option>Somali</option>
            <option>English</option>
            <option>Arabic</option>
            <option>Spanish</option>
            <option>Turkish</option>
        </select>

        <label for="date">Register Date:</label>
        <input type="date" name="date">

        <input type="submit" name="submit" value="Register">
        <input type="reset" name="reset" value="Clear">
    </fieldset>
</form>

</body>
</html>
