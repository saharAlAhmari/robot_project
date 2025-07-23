CREATE DATABASE IF NOT EXISTS robot_control;
USE robot_control;

CREATE TABLE IF NOT EXISTS robot_pose (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motor_1 INT,
    motor_2 INT,
    motor_3 INT,
    motor_4 INT,
    motor_5 INT,
    motor_6 INT,
    status INT DEFAULT 0
);