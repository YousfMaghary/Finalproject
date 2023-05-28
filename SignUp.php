<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bassem Youssef Academy - Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #990000;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #990000;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #990000;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #800000;
        }
    </style>
</head>
<body>
<div class="container">
    <h1> Sign Up </h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finalproject";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate input
        if (empty($name) || empty($email) || empty($password)) {
            echo "Please fill in all fields.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            echo "Invalid name format. Only letters and spaces are allowed.";
        } else {
            // Escape special characters to prevent SQL injection
            $name = $conn->real_escape_string($name);
            $email = $conn->real_escape_string($email);
            $password = $conn->real_escape_string($password);

            // Perform the database insertion
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
            $result = $conn->query($sql);

            if ($result === true) {
                echo "<script>alert('Data Inserted Successfully');</script>";
                header("Location: Home.php");
                exit;
            } else {
                echo "Failed to insert data!";
            }
        }
    }
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-group">
            <button type="submit" name="submit">Sign Up</button>
        </div>
    </form>
</div>
</body>
</html>