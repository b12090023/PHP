<html>
    <head><title>明新科技大學資訊管理系</title>
    <meta charset="utf-8">
    <link href="https://cdn.bootcss.com/flexslider/2.6.3/flexslider.min.css" rel="stylesheet"> <!--引入flexslider.min.css-->
    <script src="https://cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script> <!-- 引入jquery.min.js -->
    <script src="https://cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>     <!--flexslider-min.js-->   
    <!--啟用圖片輪播-->
    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide", // 動畫方式為滑動
                rtl: true//從右到左滑動
            });
        });
    </script>
      <!--CSS樣式設定-->
    <style>
        *{
            margin:0;/*取消外距*/
            color:gray; /*文字顏色=灰色*/
            text-align:center; /*置中對齊*/
        }
        /* top */
         /*頁首區塊Logo+導覽*/
        .top{
             background-color: white;/*背景為白色*/
        }
        .top .container{
            display: flex; /*使用flex排版*/
            align-items: center;/*垂直置中*/
            justify-content: space-between;/*分散對齊*/
            padding:10px;/*內距10px*/
        }
        .top .logo{
            /*border:1px solid red;*/
            font-size: 35px; /*文字大小35px*/
            font-weight: bold; /*文字加粗*/
        }
        .top .logo img{
            width: 100px;/*圖片寬度為100px*/
            vertical-align: middle; /*與文字垂直置中*/
        }
        .top .top-nav{
            /*border:1px solid red;*/
            font-size: 25px;/*文字大小=25px*/
            font-weight: bold;  /*文字加粗*/
        }
        .top .top-nav a{
            text-decoration: none;/*取消超連結*/
        }
        /* nav *
        /*導覽列樣式*/
        .nav {
            background-color:#333;/*背景=灰色*/
            display: flex; /*使用flex排版*/
            justify-content: center;/*導覽列置中*/
        }
        .nav ul {
            list-style-type: none;  /*移除項目符號*/
            margin: 0; /*外距為=0*/
            padding: 0; /*內距為=0*/
            overflow: hidden; /*防止超出範圍*/
            background-color: #333; /*背景=灰色*/
        }
        .nav li {
            float: left;   /* 導覽列項目向左排列 */
        }
        .nav li a {    
            display: block;  /*可點擊顯示區塊*/
            color: white;   /*文字顏色=白色*/
            text-align: center;   /*文字置中*/
            padding: 14px 16px;   /*上下內距14px 左右16px*/
            text-decoration: none;  /*移除底線*/
        }
        .nav li a:hover {
            background-color: #111; /*背景色=深灰 */
        }
        /*下拉式選單*/
        .dropdown:hover .dropdown-content {
            display: block;   /*使用block呈現上下排列*/
        }
        li.dropdown:hover{
            background-color: #333;  /*設定背景顏色*/
        }
        .dropdown-content {  /*設定下拉選單內容格式*/
            display: none;/*預設隱藏*/
            position: absolute;/*固定位置*/
            background-color: #333;/*背景=灰*/
            min-width: 160px;/*最小寬度=160px*/
            z-index: 1;/*層級高於一般內容避免被覆蓋*/
        }
        .dropdown-content a {/*設定下拉選單連結內容格式*/
            color: black;/*文字顏色為黑色*/
            padding: 12px 16px;/*內距*/
            text-decoration: none;/*去除底線*/
            display: block;/*顯示可點擊的區塊*/
            text-align: left;/*文字靠左對齊*/
        }

        /* slider */
        .slider{
            background-color: black;/*背景=黑色*/
        }
        /* banner*/
        .banner{
            background-image: linear-gradient(#ABDCFF,#0396FF);
            padding:30px;/*四周內距*/
        }
        .banner h1{
            padding: 20px;/*h1元素的上下內距*/
        }        
        /*faculty*/
        .faculty {
            display: block;
            justify-content: center;/*置中*/
            background-color:white;/*背景白色*/
            padding:40px;/*四周留白*/
        }
        .faculty h2 {
            font-size: 25px;/*標題大小*/
            color: rgb(50,51,52);/*灰色文字*/
            padding-bottom:40px;/*底部留白*/
        }
        .faculty .container {
            /*border:1px solid red;*/
            display: flex;/*使用flex排版*/
            justify-content: space-around;/*項目間平均間距*/
            align-items: center;/*垂直置中*/
        }
        .faculty .teacher{
            /*border:1px solid blue;*/
            display:block;/*區塊排列*/
            text-decoration: none;/*無底線*/
        }
        .faculty .teacher img{
            height: 200px;/*改變圖片長*/
            width: 200px;/*改變圖片寬*/
        }
        .faculty .teacher h3{
            color: White;/*白色文字*/
            background-color: rgba(39,40,34,.500);/* 半透明深色背景 */
            text-align: center;  /*垂直置中*/         
        }
        /*contact*/
        .contact {
            display: block;/*區塊排列*/
            justify-content: center;/*項目間垂直置中*/
            margin-top: 30px;/*設定大小留白*/
            margin-bottom: 30px;     /*設定大小留白*/           
        }
        .contact h2{
            color: rgb(54, 82, 110);/*藍灰色文字*/
            font-size: 25px;/*字體大小*/
        
        }
        .contact .infos{
            display:flex; /*使用Flex排版橫向*/
            margin-top: 30px; /*留白*/
            justify-content: center;/*置中*/
        }
        .contact .infos .left{
            display:block;/*區塊排列*/
            text-align: left;/*文字靠左*/
            margin-right: 30px;/*右側留白*/
        }
        .contact .infos .left b{
            display:block;/*區塊顯示*/
            text-align: left;/*靠左*/
            margin-top: 10px;/*灰色文字*/
            text-decoration: bold;
            color: Gray; /*文字=灰色*/
            font-size: 18px; /*字體大小為18px*/
            line-height: 18px; /*讓文字間距緊密 */
        }
        .contact .infos .left span{
            display:block;/*每個span占一整行*/
            text-align: left; /*文字靠左對齊*/
            margin-top: 10px;/*與上一行間距10px*/
            color: rgba(39,40,34,0.5);/*半透明灰色*/
            font-size: 16px;  /*字體大小16px*/
            padding-left: 27px; /*左邊內縮27px*/
        }
        .contact .infos .right{
            height: 200px;        /*固定高度為200px*/       
        }
        .contact .infos .right iframe{
            width: 100%; /*寬度填滿*/
            height: 100%; /*高度填滿*/
            border: 1px solid rgba(39,40,34,0.50); /*半透明邊框*/
        }
        /*footer*/
        .footer{
            display: flex;/*使用Flex排版 可對齊內容*/
            justify-content: center;/*內容置中對齊*/
            background-color: rgb(25,26,30); /*深灰黑底色*/
            padding: 30px 0;/*上下30px內距 左右無內距*/
        }
        /*登入畫面css*/
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            right: 50;
            top: 50;
            width: 20%; /* Full width */
            height: 20%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(255,255,255,0.9); /* Black w/ opacity */
            padding-top: 50px;
        }  /*登入畫面css*/
        /*佈告欄*/
        .bulletin{
            display: block;/*設定為區塊*/
            justify-content: center;
            background-color: rgb(255,204,153);/*背景=橘色*/
            padding: 30px 0;/*上下內距30px左右0*/

        }
        .bulletin h1{
            padding:10px;/*四周內距10px*/
        }
        .bulletin table{
            border-collapse:collapse;/*邊框合併，讓表格線不重疊*/
            font-family: 微軟正黑體; /*設定中文字型為微軟正黑體*/
            font-size:16px; /*字體大小為 16px*/
            border:1px solid #000;/*表格外框設為1px實心黑色線*/
        }
        .bulletin table th{
            background-color: #abdcff;/*淺藍色背景*/
            color: #ffffff; /*白色字體*/
        }
        .bulletin table td{
            background-color: #ffffff; /*白色背景*/
            color: #0396ff;/*藍色文字*/
        }
    </style>
    </head>
    <body>
        <div class="top"><!--頂部區域-->
             <!--左側Logo與系名-->
            <div class="container">
                <div class="logo">
                  <img src="https://github.com/shhuangmust/html/raw/111-1/IMMUST_LOGO.JPG">
                  明新科技大學資訊管理系
                </div>
                  <!--右側導覽連結與登入按鈕-->
                <div class="top-nav">
                  <a href=>明新科大</a>
                  <a href=>明新管理學院</a>
                  <!---跳出登入畫面-->
                  <label onclick="document.getElementById('login').style.display='block'">登入</label>
                  <div id="login" class="modal">
                     <!--登入視窗-->
                    <span onclick="document.getElementById('login').style.display='none'">&times; 管理系統登入</span>
                    <form method=post action="10.login.php">
                        帳號：<input type=text name="id"><br />
                        密碼：<input type=password name="pwd"><p></p>
                        <input type=submit value="登入"> <input type=reset value="清除">
                    </form>
                  </div>  
                  <!---登入畫面-->
                </div>
              </div>
        </div>
        <div class="nav">   
            <ul>
                <li><a href="#home">首頁</a></li> <!--連到首頁-->
                <li><a href="#introduction">系所簡介</a></li><!--連到系所簡介-->
                <li  class="dropdown"><a href="#faculty">成員簡介</a><!--下拉選單-->
                    <div class="dropdown-content">
                        <!--子選項：X老師-->
                        <a href="#faculty">黃老師</a>
                        <a href="#faculty">李老師</a>
                        <a href="#faculty">應老師</a>
                    </div>                       
                </li>
                <li><a href="#about">相關資訊</a></li> <!--連到相關資訊-->
            </ul>
        </div>
        <!--輪播圖片區塊-->
        <div class="slider">
            <div class="flexslider"><!--使用Flexslider外掛-->
                <ul class="slides">
                     <!--第X張圖片-->
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider1.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider2.JPG" /></li>
                    <li><img src="https://github.com/shhuangmust/html/raw/111-1/slider3.JPG" /></li>
                </ul>
            </div>
        </div>
        <!---佈告欄--->
        <div class="bulletin">
           <h1>最新公告</h1>
            <?php
           
                $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //建立與資料庫的連線（主機、帳號、密碼、資料庫名稱）
                $result=mysqli_query($conn, "select * from bulletin");//執行查詢bulletin資料表的所有資料
                echo "<table border=2><tr><th>佈告編號</th><th>佈告類別</th><th>標題</th><th>佈告內容</th><th>發佈時間</th></tr>";//輸出表格的標題列
                 //使用while迴圈讀取每一筆資料
                while ($row=mysqli_fetch_array($result)){
                    echo "<tr><td>";
                    echo $row["bid"];//顯示佈告編號
                    echo "</td><td>";  //依據type數字對應文字
                    if ($row["type"]==1) echo "系上公告";  
                    if ($row["type"]==2) echo "獲獎資訊"; 
                    if ($row["type"]==3) echo "徵才資訊"; 
                    echo "</td><td>"; 
                    echo $row["title"]; //顯示標題
                    echo "</td><td>";
                    echo $row["content"];  //顯示內容
                    echo "</td><td>";
                    echo $row["time"]; //顯示發佈時間
                    echo "</td></tr>";
                } // 結束表格輸出
                echo "</table>";
            ?>
        </div>
        <!---佈告欄--->
        <div class="banner" id="introduction">
            <!--系所簡介-->
            <h1>系所簡介</h1>
            <h1>歷年教育部評鑑皆榮獲一等</h1>
            <h1>明新科技大學資訊管理系</h1>
            <h1>全國私立科大第一資管系</h1>
        </div>
        <!--師資介紹區-->
        <div class="faculty" id="faculty">
            
            <h2>師資介紹</h2>
            <div class="container">
                 <!--黃老師的照片與連結-->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty1.jpg" />
                    <h3>黃老師</h3>
                </a>
                <!--李老師的照片與連結-->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty2.jpg" />
                    <h3>李老師</h3>
                </a>
                 <!--應老師的照片與連結-->
                <a class="teacher" href="">
                    <img src="https://github.com/shhuangmust/html/raw/111-1/faculty3.jpg" />
                    <h3>應老師</h3>
                </a>        
            </div>
        </div><!--聯絡資訊區-->
        <div class="contact" id="about">
                <h2>相關資訊</h2>
                <div class="infos">
                    <div class="left">
                         <!--地址與聯絡方 -->
                        <b>明新科技大學管理學院大樓二樓</b>
                        <span>304新竹縣新豐鄉新興路1號</span>
                        <b> 電話:03-5593142</b>
                        <span>分機:3431、3432、3433</span>
                        <b> 傳真:03-5593142</b>
                        <span>分機:3440</span>
                    </div>
                    <div class="right">
                          <!--Google地圖嵌入 -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.185885150929!2d120.98912333466727!3d24.86332844316392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34683154faa8283b%3A0x92cb1c5564a574ef!2z5piO5paw56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1536665837954" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
        </div><!--頁尾區塊-->
        <div class="footer">
            &copy;Copyright 2022 Department of Information Management, MUST. All rights reserved. 維護者 Tony SHHuang
        </div>
        <!--結束 -->
     </body>
</html>
