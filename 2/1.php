<?php ob_start(); ?>
<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>2. Создать сайт из пяти страниц. На первой странице пользователь
    вводит свое имя, после чего на каждой странице появляется введенное
    имя.</p>
<ul>
    <li><a href="2.php">2 страница</a></li>
    <li><a href="3.php">3 страница</a></li>
    <li><a href="4.php">4 страница</a></li>
    <li><a href="5.php">5 страница</a></li>
</ul>
<form method="post" action="">
    <label for="your_name">Введите имя</label>
    <input type="text" id="your_name" name="your_name"><br><br>
    <input type="submit" value="Принять!">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['your_name'])) {
        session_start();
        $_SESSION['name']=$_POST['your_name'];
        ob_end_flush();
    }
}
?>