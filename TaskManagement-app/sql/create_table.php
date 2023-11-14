<?php
require_once "conn.php";
// $sql="CREATE TABLE users(
//     user_id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
$sql="CREATE TABLE tasks(
    task_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE
)";
if($conn->query($sql)== TRUE){
    echo "Table users created successfuly";
}
else{
    echo "error" . $conn->error;
}
?>