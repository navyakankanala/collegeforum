<?php
session_start();
unset($_session['username']);
session_destroy();


header("Location:login1.php");
exit();
?>