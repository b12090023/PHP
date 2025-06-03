<?php

    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "請登入帳號";//如果沒登入會顯示這條訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//然後3秒之後跳到2.login.html
    }
    else{     //mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_query() 從資料庫查詢資料
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){ //將指定帳號的密碼更新為新密碼
            echo "修改錯誤";//顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //三秒後跳回18.user.php
        }else{
            echo "修改成功，三秒鐘後回到網頁";//顯示成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";//三秒後跳回18.user.php
        }
    }

?>
