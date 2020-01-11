<?php
$sender = '9jbr99@gmail.com';
$recipient = 'ericcolesmith@gmail.com';

$subject = "php mail test";
$message = "php test message";    
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>
