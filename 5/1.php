<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>5.Сделайте счетчик посещения сайта посетителем. Каждый раз,
    заходя на сайт, он должен видеть надпись: 'Вы посетили наш
    сайт % раз!'.</p>
<ul>
    <li><a href="2.php">2 страница</a></li>
</ul>
<form method="post" action=" ">
    <input type="submit" value="Очистить данные">
</form>
<?php
session_start();
$_SESSION['visited'] > 0 ?: $_SESSION['visited'] = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['visited']=0;
}
?>