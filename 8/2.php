<a href="1.php">
    <h1>Домой</h1>
</a>
<?php 
session_start();
$current_date = new DateTime();
$interval=$current_date->diff($_SESSION['time']);
$totalSeconds = ($interval->days * 24 * 60 * 60) + ($interval->h * 60 * 60) + ($interval->i * 60) + $interval->s;
echo "вы на сайте: ".$totalSeconds." секунд";
?>