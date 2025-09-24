<?php session_start(); 
// check log user
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- CSS -->
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: "Segoe UI", Arial;
            font-size: 16px;
            margin: 0.20%;
        }
        input, button {
            width: 100%;
            padding: 10px 20px;
            margin: 10px 5px;
            font-size: 16px;
            border: 1px solid lightgrey;
            border-radius: 10px;
        }
        button {
            background-color: green;
            color: white;
        }
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div>
        <p><?php
        echo "Hello " . $_SESSION['uname'] . "<br>";
        echo "User Type: " . $_SESSION['role'] . "<br>";
        ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>