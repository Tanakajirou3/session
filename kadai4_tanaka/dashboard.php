<?php
session_start();

// ユーザーがログインしているかどうかを確認
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ダッシュボード</title>
</head>
<body>
    <h1>ダッシュボード</h1>
    <p>ログイン済みのユーザーです！</p>
    <a href="logout.php">ログアウト</a>
</body>
</html>
