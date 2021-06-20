<?php
require_once "inc/config.php";

$track = new App\Category();

if (isset($_POST['b_input'])) {
    $track->input();
    header("location:index.php?page=track_tampil");
}