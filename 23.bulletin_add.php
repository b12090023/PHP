<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "please login first";//顯示請先登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//用html標籤在3秒後自動導向登入頁面2.login.html
    }
    else{//mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_query() 從資料庫查詢資料

        $sql="insert into bulletin(title, content, type, time)  
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";//建立SQL指令將表單送過來的標題 內容 類型與時間寫入bulletin資料表中
        if (!mysqli_query($conn, $sql)){//如果執行SQL指令失敗
            echo "新增命令錯誤"; //顯示錯誤
        }
        else{ //如果成功新增
            echo "新增佈告成功，三秒鐘後回到網頁"; //顯示訊息
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";//3秒後跳回佈告列表頁11.bulletin.php
        }
    }
?>
