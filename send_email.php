<?php
    mail('krstreit0013@gmail.com', $_POST['title'], $_POST['body']);

    header("refresh:3; url=subscribe.php");
    echo "Your email has been sent!\nPlease wait 3 seconds for the page to refresh."
?>

