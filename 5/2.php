<a href="1.php">
    <h1>Домой</h1>
</a>
<?php
session_start();
$_SESSION['visited']++;
echo "Вы посетили наш сайт: ".$_SESSION['visited']." раз";
?>