<?php
// Start the session
session_start();
$_SESSION["isLogged"] == false;
session_destroy();
header('Location: index.html');
exit;
?>
