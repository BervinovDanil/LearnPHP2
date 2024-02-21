<?php 
ob_start();
?>
<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>8. Запишите в сессию время захода пользователя на сайт.
    При обновлении страницы выводите, сколько секунд назад
    пользователь зашел на сайт.</p>
<ul>
    <li><a href="2.php">Сколько я на сайте?</a></li>
</ul>
<form method="post" action="">
    <input type="submit" value="Очистить!">
</form>
<?php
session_start();
if (isset($_SESSION['time'])) {
} else {
    $current_date = new DateTime();
    $_SESSION['time'] = $current_date;
    ob_end_flush();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: " . $_SERVER['PHP_SELF']);
    ob_end_flush();
    unset($_SESSION['time']);
}
?>