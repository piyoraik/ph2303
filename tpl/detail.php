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
            <table class="table">
                <tr>
                    <th class="info">ID</th>
                    <td><?php echo $getid_record['id']; ?></td>
                </tr>
                <tr>
                    <th class="info">氏名</th>
                    <td><?php echo $getid_record['name'] ?> 様</td>
                </tr>
                <tr>
                    <th class="info">年齢</th>
                    <td><?php echo $getid_record['age'] ?> 歳</td>
                </tr>
                <tr>
                    <th class="info">画像</th>
                    <td>
                        <?php if($getid_record['id'] != '未登録' ): ?>
                            <img src="./img/<?php echo $getid_record['id'].".".$getid_record['ext']; ?>">
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>