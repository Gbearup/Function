<?php
include('function.php'); // 包含你的 update 函式

// 更新 member 表格中的 email 欄位，條件是 acc = '1234' 和 pw = '123'
update('member', ['email' => '123@gmail.com'], ['acc' => '1234', 'pw' => '123']);
?>