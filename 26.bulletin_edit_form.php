<?php
    error_reporting(0);//關閉錯誤訊息
    session_start();
    if (!$_SESSION["id"]) {//檢查有沒有登入
        echo "please login first";//顯示請先登入提示
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";//用html標籤在3秒後自動導向登入頁面2.login.html
    }
    else{
        //mysqli_connect() 建立資料庫連結
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET["bid"]}");//查詢資料庫中bid為指定的佈告內容
        $row=mysqli_fetch_array($result);//取得查詢結果的佈告資料
// 根據佈告類型設定選項是否先被選取
        $checked1="";
        $checked2="";
        $checked3="";

        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
        
        echo  /* 顯示修改表單，填入原本的資料值*/ "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=27.bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>   <!--顯示佈告編號-->
                    標    題：<input type=text name=title value={$row['title']}><br>  <!--標題欄位 原標題-->
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>   <!--內容欄位 為原始內容-->
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>   <!--依據原本的type設定Checked-->
                    發布時間：<input type=date name=time value={$row['time']}><p></p>   <!--日期欄位 預設為原時間-->
                    <input type=submit value=修改佈告> <input type=reset value=清除>  <!--修改與清除按鈕-->
                </form>
            </body>
        </html>
        ";
    }
?>
