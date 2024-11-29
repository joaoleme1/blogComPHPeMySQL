<?php
// error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$database = "blog_db"; 


// $sql = "insert into blog_table (topic_title, topic_date, image_filename, topic_para) values ('" . $blogTitle . "', '" . $blogDate . "', '" . $filename . "', '" . $blogPara . "');";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) die("erro de conexao") . $conn->connect->error;
?>