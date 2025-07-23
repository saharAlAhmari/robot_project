<?php
$conn = new mysqli("localhost", "root", "", "robot_control");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
$id = intval($_GET['id']);
$conn->query("DELETE FROM robot_pose WHERE id = $id");
$conn->close();
?>