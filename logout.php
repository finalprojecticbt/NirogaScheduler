<?php
// Start the session
session_start();
$_SESSION["loggedStat"] == false;
session_destroy();
header('Location: index.html');
exit;
?>
