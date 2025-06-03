<html>
    <head><title>新增使用者</title></head>  <!--網頁標題-->
    <body>
<?php        
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {  //如果未登入則會跳轉到2.login.html
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    //如果已經登入的話顯示15.user_add.php
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>   //輸入使用者帳號
                密碼：<input type=text name=pwd><p></p>  //跟密碼
                <input type=submit value=新增> <input type=reset value=清除>    //新增按鍵登入和重設
            </form>
        ";
    }
?>
    </body>
</html>
