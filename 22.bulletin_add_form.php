<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) { //檢查有沒有登入
        echo "please login first";  //顯示請先登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//用html標籤在3秒後自動導向登入頁面2.login.html
    }
    else{   //如果已經登入顯示新增佈告的畫面

        echo "
        <html>
            <head><title>新增佈告</title></head> 
            <body>
                <form method=post action=23.bulletin_add.php>
                    標    題：<input type=text name=title><br> <!--輸入佈告的標題-->
                    內    容：<br><textarea name=content rows=20 cols=20></textarea><br>  <!--輸入佈告的內容-->
                    佈告類型：<input type=radio name=type value=1>系上公告 
                            <input type=radio name=type value=2>獲獎資訊
                            <input type=radio name=type value=3>徵才資訊<br>  <!--選擇佈告的類型-->
                    發布時間：<input type=date name=time><p></p> <!--輸入佈告發布的日期-->
                    <input type=submit value=新增佈告> <input type=reset value=清除>  <!--新增與清除按鈕-->
                </form>
            </body>
        </html>
        ";
    }
?>
