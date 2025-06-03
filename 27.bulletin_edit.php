<?php

    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "請登入帳號";//顯示請先登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//用html標籤在3秒後自動導向登入頁面2.login.html
    }
    else{   //mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_query() 從資料庫查詢資料
        //執行指令來更新bulletin表的資料
        if (!mysqli_query($conn, "update bulletin set title='{$_POST['title']}',content='{$_POST['content']}',time='{$_POST['time']}',type={$_POST['type']} where bid='{$_POST['bid']}'")){
            echo "修改錯誤";//顯示錯誤訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";  //三秒後跳回11.bulletin.php

        }else{
            echo "修改成功，三秒鐘後回到佈告欄列表";//顯示成功訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//三秒後跳回11.bulletin.php
        }
    }

?>
