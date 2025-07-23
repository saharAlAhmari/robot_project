<?php
$conn = new mysqli("localhost", "root", "", "robot_control");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT * FROM robot_pose ORDER BY id ASC");

echo "<table style='width:100%; border-collapse:collapse; text-align:center; font-family:Arial; font-size:14px; background:#fff;'>
<tr style='background:#f0f0f0;'>
    <th>#</th>
    <th>Motor 1</th>
    <th>Motor 2</th>
    <th>Motor 3</th>
    <th>Motor 4</th>
    <th>Motor 5</th>
    <th>Motor 6</th>
    <th>Action</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['motor_1']}</td>
        <td>{$row['motor_2']}</td>
        <td>{$row['motor_3']}</td>
        <td>{$row['motor_4']}</td>
        <td>{$row['motor_5']}</td>
        <td>{$row['motor_6']}</td>
        <td>
            <button onclick='runPose({$row['id']})'>Load</button>
            <button onclick='removePose({$row['id']})'>Remove</button>
        </td>
    </tr>";
}
echo "</table>";
$conn->close();
?>
<script>
function runPose(id) {
    fetch(`update_status.php?id=${id}`).then(() => location.reload());
}
function removePose(id) {
    fetch(`remove_pose.php?id=${id}`).then(() => location.reload());
}
</script>
