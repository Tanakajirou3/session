<?php
session_start();

// セッションを破棄してログアウト
session_unset();
session_destroy();

// ログアウト後にログインページにリダイレクト
header("Location: login.php");
exit();
?>
