<?php
session_start();

// ログインしている場合はダッシュボードへリダイレクト
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ホーム</title>
</head>
<body>
    <h1>ホームページ</h1>
    <p>ようこそ！ログインしてください。</p>
    <a href="login.php">ログイン</a>
    <br>
    <a href="public_page.php">ログイン不要なページを見る</a>
</body>
</html>
