<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>美味しいお店リスト
    </title>
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
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>美味しいお店リスト</legend>
                <label>店名：<input type="text" name="name"></label><br>
                <label>住所：<input type="text" name="email"></label><br>
                <label>最寄り：<input type="text" name="age"></label><br>
                <label>感想：<textarea name="content" rows="1" cols="40"></textarea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>

</html>
