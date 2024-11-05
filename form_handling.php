<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .student-info {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            color: #6e8efb;
            text-align: center;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="student-info">
    <h2>Student Information</h2>

    <?php
    // Check if the form was submitted using POST
    if (!empty($_POST['submit'])) {
        echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST["name"]) . "</p>";
        echo "<p><strong>Place of Birth:</strong> " . htmlspecialchars($_POST["pob"]) . "</p>";
        echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST["phone"]) . "</p>";

        if (!empty($_POST["gender"]))
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST["gender"]) . "</p>";

        echo "<p><strong>Faculty:</strong> " . htmlspecialchars($_POST["faculty"]) . "</p>";

        echo "<p><strong>Hobbies:</strong> ";
        if (!empty($_POST["hobbies"])) {
            echo htmlspecialchars(implode(", ", $_POST["hobbies"]));
        } else {
            echo "None";
        }
        echo "</p>";

        echo "<p><strong>Languages:</strong> ";
        if (!empty($_POST["languages"])) {
            echo htmlspecialchars(implode(", ", $_POST["languages"]));
        } else {
            echo "None";
        }
        echo "</p>";

        echo "<p><strong>Register Date:</strong> " . htmlspecialchars($_POST["date"]) . "</p>";
    } else {
        echo "<p>No data submitted. Please go back and fill out the form.</p>";
    }
    ?>
</div>

</body>
</html>
