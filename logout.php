<?php
session_start();
session_unset($_SESSION['eid']);
session_destroy($_SESSION['eid']);
header('location:index.php');
?>
