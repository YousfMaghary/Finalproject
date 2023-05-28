<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finalproject";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to retrieve all records from the database
function getServices() {
    global $conn;
    $sql = "SELECT * FROM services";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Function to add a new service to the database
function addService($data) {
    global $conn;
    $icon = $data['icon'];
    $title = $data['title'];
    $desc = $data['desc'];

    $sql = "INSERT INTO services (icon, title, `desc`) VALUES ('$icon', '$title', '$desc')";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Function to delete a service from the database
function deleteService($id) {
    global $conn;
    $sql = "DELETE FROM services WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

// Check if form is submitted for adding a new service
if (isset($_POST['add'])) {
    $serviceData = array(
        'icon' => $_POST['icon'],
        'title' => $_POST['title'],
        'desc' => $_POST['desc']
    );

    $addResult = addService($serviceData);

    if ($addResult) {
        echo "Service added successfully!";
    } else {
        echo "Error adding service.";
    }
}

// Check if form is submitted for deleting a service
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    $deleteResult = deleteService($deleteId);

    if ($deleteResult) {
        echo "Service deleted successfully!";
    } else {
        echo "Error deleting service.";
    }
}

// Retrieve all services from the database
$services = getServices();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resource Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1, h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 300px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 14px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<h1>Service Dashboard</h1>

<h2>Add Service</h2>
<form method="POST">
    <label for="service-icon">Icon:</label>
    <input type="text" id="service-icon" name="icon" required><br><br>
    <label for="service-title">Title:</label>
    <input type="text" id="service-title" name="title" required><br><br>
    <label for="service-desc">Description:</label>
    <textarea id="service-desc" name="desc" required></textarea><br><br>
    <input type="submit" name="add" value="Add Service">
</form>

<h2>Delete Service</h2>
<form method="POST">
    <label for="delete-service-id">Service ID:</label>
    <input type="text" id="delete-service-id" name="delete-service-id" required><br><br>
    <input type="submit" name="delete" value="Delete Service">
</form>


<h2>Update Service</h2>
<form>
    <label for="update-resource-id">Service ID:</label>
    <input type="text" id="update-resource-id" name="update-resource-id" required><br><br>
    <label for="updated-resource-name">Updated Service Name:</label>
    <input type="text" id="updated-resource-name" name="updated-resource-name"><br><br>
    <label for="updated-resource-description">Updated Service Description:</label>
    <textarea id="updated-resource-description" name="updated-resource-description"></textarea><br><br>
    <input type="submit" value="Update Service">
</form>
<h1>Portfolio Dashboard</h1>


<h2>Add Portfolio</h2>
<form method="POST">
    <label for="portfolio-img">Image URL:</label>
    <input type="text" id="portfolio-img" name="img" required><br><br>
    <label for="portfolio-desc">Description:</label>
    <textarea id="portfolio-desc" name="desc" required></textarea><br><br>
    <input type="submit" name="add-portfolio" value="Add Portfolio">
</form>

<h2>Delete Portfolio</h2>
<form method="POST">
    <label for="delete-portfolio-id">Portfolio ID:</label>
    <input type="text" id="delete-portfolio-id" name="delete-portfolio-id" required><br><br>
    <input type="submit" name="delete-portfolio" value="Delete Portfolio">
</form>


</body>
</html>
