<?php
// データベース接続
function db_connect(){
    require_once("./const.php");
    $link = mysqli_connect(HOST,USER_ID,PASSWORD,DB_NAME);
    mysqli_set_charset($link, 'utf8');
    return $link;
}

// POSTで送られてきたデータをINSERT
function db_insert(){
    $link = db_connect();
    if(isset($_POST['name']) && isset($_POST['age']) || is_uploaded_file($_FILES['uplode_file']['tmp_name'])){
        $img = $_FILES['uplode_file']['name'];
        $ext = pathinfo($img, PATHINFO_EXTENSION);
        $sql = "INSERT INTO sample2 (name, age, ext) VALUES ('" . $_POST['name'] . "' , " . $_POST['age'] . " , '" .$ext. "')";
        mysqli_query($link,$sql);
        $id = mysqli_insert_id($link);
        mysqli_close($link);
        move_uploaded_file($_FILES['uplode_file']['tmp_name'],'./img/'.$id.'.'.$ext);
        return $id;
    }else{
        return false;
    }
}

// 直前にINSERTしたレコード　を取得
function db_justbefore($id){
    if($id){
        $link = db_connect();
        $sql = "SELECT * FROM sample2 WHERE id = '".$id."'";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($link);
        return $row;
    }else{
        return false;
    }
}

// すべてのレコードを取得
function db_list(){
    $link = db_connect();
    $sql = "SELECT * FROM sample2";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_all($result);
    mysqli_close($link);
    return $row;
}

// すべての関数を実行
$id     = db_insert();
$dbsave = db_justbefore($id);
$dblist = db_list();

// 連想配列に値が入ってない場合のエラー処理
if(empty($dbsave['id'])){
    $dbsave['id'] = '未登録';
    $dbsave['name'] = '未登録';
    $dbsave['age'] = '未登録';
}

require_once ("./tpl/complete.php");
?>