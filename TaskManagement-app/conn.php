<?php
$server='localhost';
$username='root';
$password='';
$database='task-management';
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){
    die("Connection Error". $conn->connect_error);
}
// else{
//     echo "Established";
// }
?>