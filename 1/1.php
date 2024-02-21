<?php
session_start();
if (isset($_SESSION['visited'])) {
    $_SESSION['visited'][] = basename(__FILE__);
} else {
    $_SESSION['visited'] = array();
}
?>
<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>Создать сайт из четырех страниц. На четвертой странице
    пользователь видит список страниц, которые он посещал.</p>
<ul>
    <li><a href="2.php">2 страница</a></li>
    <li><a href="3.php">3 страница</a></li>
    <li><a href="4.php">4 страница</a></li>
    <li><a href="5.php">Результаты</a></li>
</ul>