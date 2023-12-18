<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <script>
            document.getElement
        </script>
    <body>
 
    
    <form id="f1" name="f1" method="get" action="<?php $_SERVER['PHP_SELF']?>">
        <input type="text" id="t1" name="t1" value="" placeholder="請輸入關鍵字或品牌名稱" />
        <input type="submit" id="search1" name="search1" value="搜尋" />
        <br>
        <select name="n_per_page" >
            <!-- onchange="showUser(this.value)" > -->
            <option value="1">每頁顯示筆數</option>
            <option value="5">5筆</option>
            <option value="10">10筆</option>
            <option value="15">15筆</option>
            <option value="25">25筆</option>
        </select>
        <input type="submit" id="submit1" name="submit1" value="確定" />
        <br>
        <input type="submit" value="上一頁">
        <input type="submit" id="next1" name="next1" value="下一頁"  >
        <br>
    <!-- <input type="text" id="i1" name="i11" value=""> -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chocolate_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully <br>";
    static $start_number = 1;
    static $end_number = 1;
    if (isset($_GET['submit1'])){
        $end_number = $_GET['n_per_page'];
    };
    $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;

    if(isset($_GET['search1'])){
        $sql = "SELECT * FROM chocolate Where Data_name LIKE '%".$_GET['t1']."%' Limit 10";
    };
    if(isset($_GET['next1'])){
        echo $start_number.$end_number;
        $start_number += 10;
        $end_number += 10 ;
        echo $start_number.$end_number;
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;
    };


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo  $row["Data_name"].  $row["Data_price"]."<br>";
        
        echo  "<img src=.\chocolate_images\\".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'>";
        echo  $row["Data_orderid"]."&nbsp&nbsp".$row["Data_name"]."&nbsp&nbsp"."\$".$row["Data_price"]."<br>";
    }
    } else {
    echo "0 results";
    }

    $conn->close();

 ?>
    </form>
    <!-- <script>
        function showUser(str) {
            var xmlhttp = new XMLHttpRequest();
            // xmlhttp.onreadystatechange = function() {
            // if (this.readyState == 4 && this.status == 200) {
            //     document.getElementById("txtHint").innerHTML = this.responseText;
            // }
           
            xmlhttp.open("GET","numberPerPage.php?n_per_page="+str,true);
            xmlhttp.send();
        };
        

    </script> -->
    </body>
    </html>