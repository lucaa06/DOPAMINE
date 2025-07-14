<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("HTTP/1.1 401 Unauthorized");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];

    if(isset($_POST['theme'])){
        $theme = $_POST['theme'];
        $sql = "UPDATE themes SET mode = ? WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $theme, $user_id);
        $stmt->execute();
        $stmt->close();
    }

    if(isset($_POST['font_size'])){
        $font_size = $_POST['font_size'];
        // You would typically store this in a new table or a new column in the users table.
        // For simplicity, we'll just store it in the session for now.
        $_SESSION['font_size'] = $font_size;
    }

    if(isset($_POST['high_contrast'])){
        $high_contrast = $_POST['high_contrast'];
        // You would typically store this in a new table or a new column in the users table.
        // For simplicity, we'll just store it in the session for now.
        $_SESSION['high_contrast'] = $high_contrast;
    }

    $conn->close();
}
?>
