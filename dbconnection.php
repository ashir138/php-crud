<?php
$con = mysqli_connect("localhost", "root", "root", "resume", 8889);

if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
    exit();
}
?>
