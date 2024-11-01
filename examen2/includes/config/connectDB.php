<?php 
function connectdb() {

    $db = mysqli_connect("localhost", "root", "", "RealEstate");

    return $db;
}
?>
