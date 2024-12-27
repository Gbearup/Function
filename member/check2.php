<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳密登入結果</title>
</head>
<body>

<div>

<?php

// 資料庫連線，一樣的兩條程式碼先上來
$dsn="mysql:host=localhost;charset=utf8;dbname=crud";
$pdo=new PDO($dsn,'root','');


if(!isset($_POST['acc'])){
    header("location:login2.php");
    exit();
 }

$acc=$_POST['acc'];
$pw=$_POST['pw'];

// 這邊要加入資料庫的條件
$sql="select count(id) from `member` where `acc`='$acc' && `pw`='$pw'";
// echo $sql;
$row=$pdo->query($sql)->fetchColumn();
// $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC); 改成欄之後就不需要用關聯

// 先顯示出來看看結果是啥
// echo"<pre>";
// print_r($row);
// echo"<pre>";



// $pdo->query($sql);????

// if ($acc=='Emily' && $pw=='1234'){  這個寫死了

// if ($acc==$row['acc'] && $pw==$row['pw'] ){  可以更精簡

if($row>=1){
   echo "帳密正確，登入成功";
//    $$_SESSION['login']=$acc;  選擇性使用
//    echo "<br><a href='login2.php'>回首頁</a>";
    header("location:success.php");
}else {
    header("location:login2.php?err=1");
    // echo "帳密錯誤，登入失敗";
   
}
?>


    
</div>
</body>
</html>