<?php
$userName=$_POST["name"];
$password=$_POST["pass"];
if ($userName=="admin" && $password=="admin") {
include("admin.php");
} else {

    include("user.php");
}

?>