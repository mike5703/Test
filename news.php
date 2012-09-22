<?php
function date_($date)
{
    return str_replace('-', '.', substr($date, 0, - 8));
}
$mysqli = new mysqli("localhost", "root", "", "test");
$mysqli->set_charset("cp1251");

$res = $mysqli->query('SELECT * FROM `dle_post`');
while ($r = $res->fetch_assoc()) {
    $date = date_($r['date']);
    echo "<font color='green'>" . $date . "</font><a href='http://cubes-game.ru/index.php?newsid=" . $r['id'] . "'<b>" . $r['title'] . "</b></a><br>";
}

$res->close();
exit();

?>