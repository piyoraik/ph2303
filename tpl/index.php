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
            <div class="col-xs-6 col-xs-offset-2">
                <table class="table table-bordered">
                    <form action="complete.php" method="post" enctype="multipart/form-data">
                        <tr>
                            <th class="info">氏名</th>
                            <td><input type="text" name="name" class="col-xs-12"></td>
                        </tr>
                        <tr>
                            <th class="info">年齢</th>
                            <td><input type="number" name="age" class="col-xs-12"></td>
                        </tr>
                        <tr>
                            <th class="info">画像</th>
                            <td><input type="file" name="uplode_file" class="col-xs-12"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                    <button type="submit" class="btn btn-default">登録する</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>