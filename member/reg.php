<?php
// 1. 資料庫連接 (使用 PDO)
$dsn= "mysql:host=localhost;charset=utf8;dbname=crud";
$pdo=new PDO($dsn,'root','');

// 2. 假設有一個 SQL 查詢   使用 INSERT INTO SQL 語句將數據插入到資料庫中。
$sql="insert into `member`(`acc`,`pw`,`email`,`tel`) values('{$_POST['acc']}','{$_POST['pw']}','{$_POST['email']}','{$_POST['tel']}')";

// exec() 不需要返回結果集的 SQL 查詢，例如 INSERT、UPDATE 或 DELETE。
// 它會返回受影響的行數（即有多少行被插入、更新或刪除）。如果查詢執行成功，則返回受影響的行數，否則返回 false。
// 假設查詢是 INSERT INTO ...，如果成功插入 1 條記錄，exec() 會返回 1。如果沒有插入任何記錄或查詢失敗，它會返回 false。

// 3. 執行 SQL 查詢如果 exec() 方法返回一個正整數（表示影響了至少一行），則條件成立，進入 if 內部執行：
if($pdo->exec($sql)){

    // 將頁面重定向到 reg_form.php，並在 URL 中添加一個參數 status=1，表示操作成功。
    header("location:reg_form.php?status=1");
    
// 如果 exec() 返回 false（表示 SQL 查詢沒有成功執行），則進入 else 內部執行：
}else{
    // 將頁面重定向到 reg_form.php，並在 URL 中添加參數 status=2，表示操作失敗。
    header("location:reg_form.php?status=2");

}

// header() 函數用來發送原始的 HTTP 標頭到瀏覽器。在這裡，header("location: ...") 用來重定向頁面。
// location: 是一個特殊的 HTTP 標頭，告訴瀏覽器跳轉到指定的 URL。
// 這裡會重定向到 reg_form.php，並根據操作結果將狀態 (status) 參數設置為 1（成功）或 2（失敗）。




?>

