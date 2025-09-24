<?php
session_start();
$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    // user
    $db_user = 'adam';
    $db_user_pwd = '123';

    // admin
    $db_admin = 'admin';
    $db_admin_pwd = '456';

    if (empty($uname)) {
        $error .= "Enter username <br>";
    }
    if (empty($pwd)) {
        $error .= "Enter IC <br>";
    }
    if ($uname == $db_admin && $pwd == $db_admin_pwd) {
        // admin page
        $_SESSION['uname'] = $uname;
        $_SESSION['role'] = 'admin';
        header('Location: adminPage.php');
        exit();
    }
    elseif ($uname === $db_user && $pwd === $db_user_pwd) {
        $_SESSION['uname'] = $uname;
        $_SESSION['role'] = 'user';
        header('Location: userPage.php');
        exit();
    }
    else {
        $error .= "Invalid username or password";
    }
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <p class="error"><?php echo $error; ?></p>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
