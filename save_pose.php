<?php
$conn = new mysqli("localhost", "root", "", "robot_control");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$stmt = $conn->prepare("INSERT INTO robot_pose (motor_1, motor_2, motor_3, motor_4, motor_5, motor_6) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiiiii", $_POST['motor1'], $_POST['motor2'], $_POST['motor3'], $_POST['motor4'], $_POST['motor5'], $_POST['motor6']);
$stmt->execute();
$conn->close();
?>