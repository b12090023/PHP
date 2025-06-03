<html>
    <head><title>使用者管理</title></head> <!--標題-->
    <body>
    <?php
        error_reporting(0);//關閉錯誤訊息
        session_start();
        if (!$_SESSION["id"]) {//檢查有沒有登入
            echo "請登入帳號";//如果沒登入會顯示這條訊息
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//然後3秒之後跳到2.login.html
        }
        else{  //如果有則顯示管理頁面
           echo "<h1>使用者管理</h1>  //頁面主標題
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
             //mysqli_connect()建立資料庫連結
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
            //mysqli_query()從資料庫查詢資料
            $result=mysqli_query($conn, "select * from user");//從user資料表中查詢所有使用者
            //當row=mysqli_fetch_array 逐筆讀取資料並輸出表格列
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";//表
        }
    ?> 
    </body>
</html>
