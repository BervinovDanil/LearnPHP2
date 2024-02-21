<?php ob_start(); ?>
<a href="../index.html">
    <h1>Домой</h1>
</a>
<p>6.Спросите дату рождения пользователя. При следующем заходе
    на сайт напишите, сколько дней осталось до его дня рождения.
    Если сегодня день рождения пользователя - поздравьте его!</p>
<ul>
</ul>
<form method="post" action=" ">
    <label for="date_of_birth">Введите дату рождения</label>
    <input type="date" id="date_of_birth" name="date_of_birth"><br><br>
    <input type="submit" value="Рассчитать">
</form>
<?php
session_start();
if (isset($_SESSION['interval'])) {
    echo 'До вашего дня рождения ' . $_SESSION['interval']->days . ' day(-s)';
    if ($_SESSION['interval']->days == 0) {
        echo "<br>С днюхой!";
    } else {
        echo "<br>Еще долго...";
    }
}
if (isset($_POST['date_of_birth'])) {
    $dob = $_POST['date_of_birth'];
    $dobDate = new DateTime($dob);
    $current_date = new DateTime();
    $next_birthday = new DateTime($current_date->format('Y') . '-' . $dobDate->format('m-d'));
    $_SESSION['interval'] = $current_date->diff($next_birthday);
    header("Location: " . $_SERVER['PHP_SELF']);
    ob_end_flush();
}

?>