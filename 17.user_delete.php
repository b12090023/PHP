<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "請登入帳號";//如果沒登入會顯示這條訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//然後3秒之後跳到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_connect() 建立資料庫連結
        //建立SQL刪除指令 從GET中取得使用者id 然後刪除對應資料
        $sql="delete from user where id='{$_GET["id"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){//執行刪除命令
            echo "使用者刪除錯誤";//刪除成功顯示
        }else{
            echo "使用者刪除成功";//刪除失敗顯示
        }
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";//執行完刪除命令不管成功與否 都在3秒後跳回18.user.php
    }
?>
