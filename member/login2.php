<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入系統</title>
    <style>
    body{
      background-color: lightblue;
      text-align: center;
           
    }

    table{
      margin: 300px 300px;
      border collapse:collapse;
      background-color:white;
      border-radius: 30px; /* 圓角邊框 */ 
      margin:auto;
      margin-top:200px;
    }
    td{
      padding:20px;
   }

   div {
      margin: 20px;

   }

   h3{
      color:red;
      text-align:center
   }
    </style>
</head>
<body>


<?php
if(isset($_GET['err'])){
echo  "<h3>帳號或密碼錯誤</h3>";
}


if(!isset($_COOIKE['login2'])){
?>


<table>
<tr>
<td>
<p>登入系統</p>

<form action="check2.php" method="post">
    <div>
       <label for="acc"></label>
       <input type="text" name="acc" placeholder="請輸入帳號" id="acc" >
    </div>
    <div>
       <label for="password"></label>
       <input type="password" name="pw" placeholder="請輸入密碼" id="password" >
    </div>
    <div>
       <input type ="submit" value="登入">
       <input type ="reset" value="清空/重置">
    </div>

</form>
</td>
</tr>
</table>

<?php

} else {
?>

<div>你已登入</div> 

<!-- <div>
    <a href="logout.php">登出</a> | <a href="login.php">返回登入畫面</a>
</div> -->
   
<?php
   }
?>
    
</body>
</html>