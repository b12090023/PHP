<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "請登入帳號";//顯示請先登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//用html標籤在3秒後自動導向登入頁面2.login.html
    }
    else{   //mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'"; //SQL刪除語句 根據參數GET傳來的bid刪除對應的佈告
        #echo $sql;
        if (!mysqli_query($conn,$sql)){//執行SQL查詢語言 檢查是否成功
            echo "佈告刪除錯誤";//顯示錯誤訊息
        }else{
            echo "佈告刪除成功";//顯示成功訊息
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//無論失敗或成功 三秒後跳回11.bulletin.php
    }
?>
