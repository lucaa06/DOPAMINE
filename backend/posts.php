<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get all posts
    $sql = "SELECT p.id, p.content, p.image_url, p.created_at, u.username FROM posts p JOIN users u ON p.user_id = u.id ORDER BY p.created_at DESC";
    $result = $conn->query($sql);
    $posts = [];
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
    echo json_encode($posts);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new post
    $content = $_POST['content'];
    $image_url = $_POST['image_url'] ?? null;

    $sql = "INSERT INTO posts (user_id, content, image_url) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $user_id, $content, $image_url);
    $stmt->execute();
    $stmt->close();
    echo json_encode(['status' => 'success']);
}

$conn->close();
?>
