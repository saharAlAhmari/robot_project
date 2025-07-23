<?php
$conn = new mysqli("localhost", "root", "", "robot_control");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$id = intval($_GET['id']);
$conn->query("UPDATE robot_pose SET status = 0");
$conn->query("UPDATE robot_pose SET status = 1 WHERE id = $id");
$conn->close();
?>