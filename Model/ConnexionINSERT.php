<?php
$conn = mysqli_connect("localhost", "root", "", "banque_normande");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}