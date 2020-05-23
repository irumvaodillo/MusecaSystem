<?php
    session_start();
    unset($_SESSION['id']); //empty the session
    echo "<script type='text/javascript'>window.top.location='index2.php'</script>";
?>