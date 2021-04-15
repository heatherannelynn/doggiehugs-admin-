<?php
$mysqli = new mysqli('mysql01-dc3.mycorphosting.com:3306', 'heather', '2vEt8?x2', 'commulis_');
//$mysqli = new mysqli('localhost', 'root', '', 'commulis_');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>