<?php

error_reporting(0);//關閉錯誤訊息
session_start();
if (!$_SESSION["id"]) {//檢查有沒有登入
    echo "請登入帳號";//如果沒登入會顯示這條訊息
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//然後3秒之後跳到2.login.html
}
else{    //如果有登入

   //mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   //mysqli_query() 從資料庫查詢資料
   //新增資料SQL命令：insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
   $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')";
   #echo $sql;
   if (!mysqli_query($conn, $sql)) {   // 使用mysqli_query執行SQL語句 如果失敗就顯示錯誤訊息
     echo "新增命令錯誤";
   }
   else{// 若新增成功時顯示成功訊息 並在3秒後跳回18.user.php
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
