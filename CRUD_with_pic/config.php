<?php

$connect = mysqli_connect("localhost", "root", "", "profile_app");
if (!$connect) {
    die("Database Not Connected : " . mysqli_connect_error($connect));
}

?>