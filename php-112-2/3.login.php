<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))# 檢查帳號與密碼是否正確
        echo "登入成功";#當帳號密碼都正確，顯示"登入成功"
    else
        echo "登入失敗";#當帳號或密碼輸入錯誤，顯示"登入失敗"
?>
