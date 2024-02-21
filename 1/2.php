<?php
session_start();
$_SESSION['visited'][] = basename(__FILE__);
?>
<a href="1.php">
    <h1>Домой</h1>
</a>
