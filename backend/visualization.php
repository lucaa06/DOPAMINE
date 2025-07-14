<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit();
}

$sql = "SELECT u.id, u.username, f.follower_id FROM users u LEFT JOIN followers f ON u.id = f.following_id";
$result = $conn->query($sql);

$nodes = [];
$edges = [];

while ($row = $result->fetch_assoc()) {
    $nodes[] = ['id' => $row['id'], 'label' => $row['username']];
    if ($row['follower_id']) {
        $edges[] = ['from' => $row['follower_id'], 'to' => $row['id']];
    }
}

echo json_encode(['nodes' => $nodes, 'edges' => $edges]);

$conn->close();
?>
