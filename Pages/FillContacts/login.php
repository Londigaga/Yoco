<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input
    $username = htmlspecialchars(trim($_POST["username"]));

    // Validate input
    if (empty($username)) {
        $error_message = "Cellphone number is required.";
    } elseif (!preg_match("/^[0-9]{10,15}$/", $username)) {
        $error_message = "Invalid cellphone number format.";
    } else {
        // Append the username to the file
        $file = 'usernames.txt';
        file_put_contents($file, "Account: $username\n", FILE_APPEND | LOCK_EX);

        // Redirect to the payment methods page
        header('Location: /Pages/PaymentMethods.html');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recharge Status</title>
    <style>
        body {
            background-color: orange;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .message {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>YOCO RECHARGE STATUS</h1>
        <div class="message">
            <?php
            if (!empty($error_message)) {
                echo "<p style='color: red;'>$error_message</p>";
            }
            ?>
        </div>
        <br><br>
        <a href="index.html" style="color: white;">Back to Recharge Page</a>
    </center>
</body>
</html>
