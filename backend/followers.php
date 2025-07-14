<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Follow or unfollow a user
    $following_id = $_POST['following_id'];

    // Check if the user is already following the other user
    $sql = "SELECT id FROM followers WHERE follower_id = ? AND following_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $user_id, $following_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Unfollow the user
        $sql = "DELETE FROM followers WHERE follower_id = ? AND following_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $following_id);
        $stmt->execute();
        $stmt->close();
        echo json_encode(['status' => 'unfollowed']);
    } else {
        // Follow the user
        $sql = "INSERT INTO followers (follower_id, following_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user_id, $following_id);
        $stmt->execute();
        $stmt->close();
        echo json_encode(['status' => 'followed']);
    }
}

$conn->close();
?>
