<?php
session_start();
?>
<a href="1.php">
    <h1>Домой</h1>
</a>
<form method="post" action="">
    <label for="your_phone">Введите телефон второй раз</label>
    <input type="phone" id="your_phone" value="<?php echo $_SESSION['phone'] ?>" name="your_phone"><br><br>
    <input type="submit" value="Принять!">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_SESSION['phone'] == $_POST['your_phone']) {
        echo "Все круто!";
    } else {
        echo "Ошибка!!";
    }
}
?>