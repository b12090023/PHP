<html>
    <head><title>修改使用者</title></head><!-- 標題 -->
    <body>
    <?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "請登入帳號";//如果沒登入會顯示這條訊息
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//然後3秒之後跳到2.login.html
    }
    else{   //mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");//mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");//從資料庫中查詢指定id的使用者資料
        $row=mysqli_fetch_array($result); //取得查詢結果中的第一筆資料
        echo  /*顯示html表單 修改使用者的密碼*/"
        <form method=post action=20.user_edit.php>     //隱藏欄位 保留使用者帳號id傳給20.user_edit.php
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br>    //顯示帳號（不能改）
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>     // 密碼欄位顯示原本的密碼 可修改
            <input type=submit value=修改>     //確定修改
        </form>
        ";
    }
    ?>
    </body>
</html>
