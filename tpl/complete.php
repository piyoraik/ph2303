<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <div class="container">
        <div class="page-header col-xs-offset-1">
            <h1>会員登録</h1>
        </div>
        <div class="col-xs-offset-1">
            <?php if($dbsave['id'] != '未登録'):  ?>
                <b>以下の内容で登録いたしました。</b>
            <?php endif; ?>
        </div>
        <div class="col-xs-offset-1">
            <table class="table table-bordered"">
                <tr>
                    <th>ID</th>
                    <td><?php echo $dbsave["id"]; ?></td>
                </tr>
                <tr>
                    <th>氏名</th>
                    <td><?php echo $dbsave['name']; ?> 様</td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td><?php echo $dbsave['age']; ?> 歳</td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td><img src="./img/<?php echo $dbsave["id"].".".$dbsave["ext"]; ?>" ></td>
                </tr>
            </table>
        </div>
        <div class="page-header col-xs-offset-1">
            <h2>会員一覧</h2>
        </div>
        <div class="col-xs-offset-1">
            <table class="table">
                <thead>
                    <th>氏名</th>
                    <th>画像</th>
                </thead>
                <?php foreach($dblist as $key ): ?>
                    <tr>
                        <td>
                            <a href="./detail.php?id=<?php echo $key[0]; ?>" target="_blank">
                                <?php echo $key[1]; ?>様
                            </a>
                        </td>
                        <td><img src="./img/<?php echo $key[0].".".$key[3]; ?>" class="img" ></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>