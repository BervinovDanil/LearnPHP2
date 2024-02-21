<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>7. Спросите у пользователя телефон с помощью формы.
    Затем сделайте так, чтобы в другой форме (поля: имя,
    фамилия, телефон), при ее открытии, поле телефон было
    автоматически заполнено.</p>
<ul>
    <li><a href="2.php">2 страница</a></li>
</ul>
<form method="post" action="">
    <label for="your_phone">Введите телефон</label>
    <input type="phone" id="your_phone" name="your_phone"><br><br>
    <input type="submit" value="Принять!">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $_SESSION['phone']=$_POST['your_phone'];
}
?>