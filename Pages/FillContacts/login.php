<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Validate that the input is a valid phone number (optional, depending on your requirements)
    if (preg_match('/^[0-9]+$/', $username)) {
        // Open the file in append mode
        $file = fopen("usernames.txt", "a");
        
        if ($file) {
            // Write the username to the file, followed by a newline
            fwrite($file, $username . PHP_EOL);
            
            // Close the file
            fclose($file);
            
            echo "Phone number saved successfully.";
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "Invalid phone number.";
    }
}
?>
