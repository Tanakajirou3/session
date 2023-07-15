<?php
session_start();

// ログインしていない場合はログインページにリダイレクト
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// ここにログインした状態でしか見ることができないコンテンツを記述
?>

<!DOCTYPE html>
<html>
<head>
    <title>メンバー用ページ</title>
</head>
<body>
    <h1>メンバー用ページ</h1>
    <p>ログイン済みのユーザーのみアクセス可能です。</p>
    <p>ここにセンシティブな情報やプライベートなコンテンツが表示される可能性があります。</p>
    <a href="logout.php">ログアウト</a>
</body>
</html>
