<?php
session_start();

// 正しいユーザー名とパスワード
$valid_username = "academy";
$valid_password = "academy";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user_id'] = 1;
        header("Location: secure_page.php");
        exit();
    } else {
        $error_message = "ユーザー名またはパスワードが正しくありません。";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ログイン</title>
</head>
<body>
    <h1>ログインページ</h1>
    <form method="POST">
        <label>ユーザー名:</label>
        <input type="text" name="username" required>
        <br>
        <label>パスワード:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="ログイン">
    </form>
    <?php if (isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
    <?php } ?>
</body>
</html>
