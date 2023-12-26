<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>img {width:10px;}</style>
    </head>
            
<!--以下 HTML區域  -------------------------------------------------------------------------------------------------------------------------- -->        
    <body>    
    <img src="kuaikuai.jpg" width="100px" height="100px" style="float:left" title="這是張防Bug乖乖圖" alt="這是張防Bug乖乖圖" >
    <?php
    //echo("<meta http-equiv='refresh' content='1'>");
    //echo date('H:i:s Y-m-d');
    ?>
    <div id="fortest">justfortest</div> 
            <!-- <h1>tset</h1> id="btnHide" -->
    <input type="button"  onclick="functiontest(this.value)" value="義美"  >

    <form id="f1" name="f1" method="get" action="<?php $_SERVER['PHP_SELF']?>">
        <input type="text" id="search_text" name="search_text" value="" placeholder="請輸入關鍵字或品牌名稱" />
        <input type="submit" id="search1" name="search1" value="搜尋" />
        <br>
        <select name="selected_number" >
            <!-- onchange="showUser(this.value)" > -->
            <!-- 加disabled 不然會回傳value="每頁顯示筆數" -->
            <option selected disabled hidden>每頁顯示筆數</option>
            <option value="1">1筆</option>
            <option value="5">5筆</option>
            <option value="10">10筆</option>
            <option value="15">15筆</option>
            <option value="25">25筆</option>
        </select>
        <input type="submit" id="submit1" name="submit1" value="確定" />
        <br>
        <input type="submit" id="previous1" name="previous1" value="上一頁">

        <input type="submit" id="next1" name="next1" value="下一頁"  >
        <input type="submit" id="order_highest" name="order_highest" value="價格:高到低" />
        <input type="submit" id="order_lowest" name="order_lowest" value="價格:低到高" />
        
        
        <br>       
    <!-- <input type="text" id="i1" name="i11" value=""> -->

<!--以上 HTML區域  -------------------------------------------------------------------------------------------------------------------------- -->

<!--以下 PHP區域  -------------------------------------------------------------------------------------------------------------------------- -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "A12345678";
    $dbname = "chocolate_db";
    
    // 連接資料庫並確認連線
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully <br>";
    $conn->query("SET NAMES 'UTF8'");

    
    $sql ="SELECT * FROM chocolate LIMIT 10";
    //第一次載入時初始化每頁顯示資料筆數(num_per_page)為10，之後則是GET 表單submit之後的值
    if (empty($_GET['num_per_page'])){
        echo "test1 沒有GET num_per_page ";
        $num_per_page = 10;
    } else{
        echo "test2 有GET num_per_page";
        $num_per_page = $_GET['num_per_page'];
        echo "每頁筆數".$num_per_page;
    }
   
    //第一次載入時初始化start和end變數，之後則是GET 表單submit之後的值
    if (empty($_GET['start_number']) && empty($_GET['end_number']) ){
        $start_number = 1;
        $end_number = 10;
        echo "初始化START & END";
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;
     } else {
        $start_number = $_GET['start_number'];
        $end_number = $_GET['end_number'];
        echo "接收到START & END<br>";
     };

    //每一頁顯示筆數-預設為10  如果有接收到清單選定的值則用變數接 然後再把變數submit出去以便第二次載入用--------------------------
    if (isset($_GET['submit1']) && isset($_GET['selected_number'])){
        echo "test456";
        $num_per_page = $_GET['selected_number'];
        $end_number = $start_number + $_GET['selected_number'] - 1;
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;
    };
    
    //搜尋功能- 按下搜尋鍵且不為空字串--------------------------------------------------------------------------------------
    if (isset($_GET['search1']) && isset($_GET['search_text']))  {
        $sql = "SELECT * FROM chocolate WHERE Data_name LIKE '%".$_GET['search_text']."%' Limit 10";
    };

    //下一頁和上一頁(n個商品)------------------------------------------------------------------------------------------------
    if (isset($_GET['next1'])){
        $start_number += $num_per_page;
        $end_number += $num_per_page ;
        //限制可查詢商品數 只到id:100 方便測試最後一頁      
        if ($end_number > 100){
            $start_number = 100 - $num_per_page + 1;
            $end_number = 100;
        }
        // echo $start_number.$end_number;
        $sql = "SELECT * FROM chocolate WHERE Data_orderid BETWEEN ".$start_number." and ".$end_number;
    
    }elseif(isset($_GET['previous1'])){
        
        $start_number -= $num_per_page;
        $end_number -= $num_per_page ;
        //起點為零或負值 則初始化 頁面成 1 ~ 每頁資料數--------------------------------------------------------------------- 
        if ($start_number < 1 ){
            $start_number =1;
            $end_number = $num_per_page;
        }
        
        $sql = "SELECT * FROM chocolate WHERE Data_orderid BETWEEN ".$start_number." and ".$end_number;
    }
    //排序-----------------------------------------------------------------------------------
    if (isset($_GET['order_highest'])){
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 1 and 100  ORDER BY Data_price DESC limit 100";
    }else if (isset($_GET['order_lowest'])){
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 1 and 100  ORDER BY Data_price ASC limit 100";
    };
    echo $start_number."--".$end_number."--".$num_per_page;


    //進行SQL查詢---------------------------------------------------------------------------------------
    $result = $conn->query($sql);
    var_dump($result);
    echo "<div id='product_table'>";
    echo "<table border='5px'> ";
    if ($result->num_rows > 0) {
    // output data of each row
        echo "<tr><th>編號</th><th>圖片</th><th>品名</th><th>價格</th><th>購買數量</th><tr>";
        while($row = $result->fetch_assoc()) {
            // echo  $row["Data_name"].  $row["Data_price"]."<br>";
            
            echo "<tr><th>".$row['Data_orderid']."</th>";
            echo "<td><img src=./chocolate_images/".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'></td>";
            echo "<td>".$row['Data_name']."</td><td>"."\$".$row['Data_price']."</td>";
            //echo "<td><input type='number' id='quantity' name='quantity' value='0' min='0' max='99'></td>";
            // echo "<td>&nbsp;&nbsp;&nbsp;0</td></tr>";
            
        }
    } else {
    echo "0 results";
    }

    echo "</table>";
    echo "</div>";

    $result->close();
    $conn->close();
    

 ?>
        <!-- 下面三個start,end ,number 為第二次以後載入頁面，要列出的資料開頭 結束 及 每頁呈現筆數   -->
        <input type="text" name="start_number"  value="<?php echo $start_number; ?>">
        <input type="text"  name="end_number"  value="<?php echo $end_number; ?>">
        <input type="text"  name="num_per_page"  value="<?php echo $num_per_page; ?>">
        <!-- <input type="text"  name="testarray"  value="<?//php echo $testarray=['123456']; ?>"> -->

        
    </form>


    <?php  
    function search($text){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "chocolate_db";
    
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM chocolate WHERE Data_name LIKE '%".$text."%' Limit 100";

        $result = $conn->query($sql);
        echo "<table border='5px'> ";
        if ($result->num_rows > 0) {
        
            echo "<tr><th>編號</th><th>圖片</th><th>品名</th><th>價格</th><th>購買數量</th><tr>";
            while($row = $result->fetch_assoc()) {
                // echo  $row["Data_name"].  $row["Data_price"]."<br>";
                
                echo "<tr><th>".$row['Data_orderid']."</th>";
                echo "<td><img src=./chocolate_images/".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'></td>";
                echo "<td>".$row['Data_name']."</td><td>"."\$".$row['Data_price']."</td>";
                //echo "<td><input type='number' id='quantity' name='quantity' value='0' min='0' max='99'></td>";
                // echo "<td>&nbsp;&nbsp;&nbsp;0</td></tr>";
                
            }

        $result->close();
        $conn->close();

    
        }
    } 

    //search('義美');
    ?>

    <?php

    ?>

<!--以上 PHP區域  -------------------------------------------------------------------------------------------------------------------------- -->
    
    <script>
            // function functiontest(){
                // alert('Hello');
                // document.getElementById("fortest").innerHTML= "123456";}
    </script>
    <!-- <script>
        function showUser(str) {
            var xmlhttp = new XMLHttpRequest();
            // xmlhttp.onreadystatechange = function() {
            // if (this.readyState == 4 && this.status == 200) {
            //     document.getElementById("txtHint").innerHTML = this.responseText;
            // }
           
            xmlhttp.open("GET","numberPerPage.php?num_per_page="+str,true);
            xmlhttp.send();
        };
        

    </script> -->
    </body>


    <script type="text/javascript">

// $("#btnHide").click(function(){
// $("h1").hide();})
//SELECT `chocolate`.`Data_brand`,COUNT(*) FROM `chocolate` Group BY `chocolate`.`Data_brand` ORDER BY COUNT(*) DESC;
    function functiontest(test){
        alert(test);
        document.getElementById("product_table").innerHTML = "";
        document.getElementById("product_table").innerHTML="<?php search($"瑞士蓮"); ?>";}
    </script>
    </html>