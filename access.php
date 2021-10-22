<?php

$db = mysqli_connect("localhost","root","","student");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>