<?php
ob_start();
?>
<a href="1.php">
    <h1>Домой</h1>
</a>
<h2>Форма входа</h2>

<form action="" method="post">
<label for="login">Логин:</label>
<input type="text" id="login" name="login" required>

<label for="password">Пароль:</label>
<input type="password" id="password" name="password" required>

<label for="email">Мыло:</label>
<input type="email" id="email" name="email" required>

<input type="submit" value="Login">
</form>

<?php
if (isset($_POST['login'], $_POST['password'], $_POST['email'])) {
if (
$_POST['login'] == 'danil' &&
$_POST['password'] == '123' &&
$_POST['email'] == 'danil@mail.ru'
) {
setcookie("user_key", $_POST['password'], time() + 3600);
$nextPage = '2.php';
header("Location: $nextPage");
ob_end_flush();
} else {
echo "Данные неправильны!";
ob_end_flush();
}
}

// Проверяем наличие куки для отображения кнопки выхода
if (isset($_COOKIE['user_key']) && $_COOKIE['user_key'] == '123') {
echo '<form action="" method="post">
<input type="submit" name="logout" value="Выход">
</form><h2>Вы авторизованы</h2>';
}

// Обработка выхода
if (isset($_POST['logout'])) {
// Удаляем куку и перенаправляем на текущую страницу для обновления
setcookie("user_key", "", time() - 3600);
header("Location: ".$_SERVER['PHP_SELF']);
exit();
}
?>