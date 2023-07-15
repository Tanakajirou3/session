<?php
// 仮のデータベース接続情報
$host = "localhost";        // データベースのホスト名（ローカルホストの場合は"localhost"）
$username = "root"; // データベースのユーザー名（仮のユーザー名を設定）
$password = "root"; // データベースのパスワード（仮のパスワードを設定）
$database = "sample"; // データベース名（仮のデータベース名を設定）

// データベースに接続
$conn = new mysqli($host, $username, $password, $database);

// 接続エラーのチェック
if ($conn->connect_error) {
    die("データベースに接続できませんでした：" . $conn->connect_error);
}

echo "データベースに接続しました！";

// ここからデータベースの操作を行います（テーブルの作成、データの挿入など）
// ...

// データベース接続を閉じる
$conn->close();
?>
