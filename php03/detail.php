<?php

$id = $_GET["id"];

require_once("funcs.php");
$pdo = db_conn();


//２．データ登録SQL作成


$stmt = $pdo->prepare('SELECT * FROM gs_an_table WHERE id = :id;');
$stmt->bindValue (":id", $id, PDO ::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
    
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>フリーアンケート</legend>
                <label>名前：<input type="text" name="name" value="<?=$result["name"]?>"></label><br>
                <label>Email：<input type="text" name="email"value="<?=$result["email"]?>"></label><br>
                <label>年齢：<input type="text" name="age"value="<?=$result["age"]?>"></label><br>
                <label><textarea name="content" rows="4" cols="40"><?=$result["content"]?></textarea></label><br>
                <input type="hidden" name="id" value="<?= $result["id"] ?> " >
                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
</body>

</html>
