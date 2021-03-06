<?php
session_start();
require "../../dbconnect.php";
require "../../function.php";
require "../parts/admin_post.php";
if(!isset($_SESSION['admin_id'])||!isset($_SESSION['login_admin_email'])||!isset($_SESSION['admin_agent_list'])){
    header("Location: /toppage/pages/login.php");
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/reset.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/admin.css">
    <title>管理者ログイン</title>
</head>

<body>
    <?php
    require "../parts/admin_url.php";
    require "../parts/header.php";
    require "../parts/index/title_sort.php";
    require "../parts/index/agent_list.php";
    require "../parts/index/pagination.php";
    require "../parts/index/mail_popup.php";
    ?>
<!-- 
    <div>
        <form class="admin-add-agent" action="/admin/index.php" method="POST">
            エージェント追加昨日追加したい
            <br>
            イベント名：<input type="text" name="title" required>
            <input type="submit" value="登録する">
        </form>
        <a class="admin-event-link" href="/index.php">イベント一覧</a>
    </div> -->
</body>

</html>