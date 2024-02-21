<?php
session_start();

if(isset($_SESSION['visited']))
{
    echo "<ul>";
    foreach($_SESSION['visited'] as $site)
    {
        echo "<li>".$site."</li>";
    }
    echo "</ul>";
    unset($_SESSION['visited']);
}
?>
<a href="1.php">
    <h1>Домой</h1>
</a>
