<?php
$conn = new mysqli("localhost","root","65124477","semester_project");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>