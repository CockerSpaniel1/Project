<!DOCTYPE html>

<html>
    <?php //session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <title>新手上路2</title>
        <style>
            td img { width:10px;}
            
            * { background-color:lightgoldenrodyellow;
                box-sizing: border-box; }

            #header{
                    margin:5px 70px;
                    border: 5px solid pink;
                    height: 110px;
                    font-size: 26px;
                    font-weight: bold;
                    font-style: italic;
                    text-align: center;}
            
            #menu{
                float:left;
                /* height: 80vh; */
                border: 5px solid red; }

            #flex-container{ 
                width: 910px;
                /* height: 80vh; */
                border: 5px solid green;
                display: flex;
                float:left;
                flex-wrap: wrap;
                }
    
            li { margin:5px;
                list-style-type:none;                
                }
            #content { 
                margin:0px 70px;
                height: 80vh;
                border: 5px solid black;}
        </style>
    </head>
            
<!--以下 HTML區域  -------------------------------------------------------------------------------------------------------------------------- -->        
    <body>    
<div id="page">
    <div id="header">
        這邊是標題&nbsp&nbsp不要再跑版了
        <img src="kuaikuai.jpg" width="100px" height="100px" style="float:left" title="這是張防Bug乖乖圖" alt="這是張防Bug乖乖圖" >
    </div>

    <div id="content">

    <div id="menu">
        <h2>依品牌搜尋</h2>
        <ul>
            <li><input type="button" class="brand1" onclick="functiontest(this.value)" value="義美" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="瑞士蓮" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="77" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="家樂福" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="LOTTE" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="甘百世" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="Hershey's" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="明治" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="露特" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="費列羅" ></li>
            <li><input type="button"  onclick="functiontest(this.value)" value="健達" ></li>
        </ul>

        <!-- <h1>tset</h1> id="btnHide" -->

    
    <form id="f1" name="f1" method="post" action="<?php $_SERVER['PHP_SELF']?>">
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

        <!--menu的 end div  -->
        </div>       


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
    //echo "Connected successfully <br>";
    $conn->query("SET NAMES 'UTF8'");

    
    $sql ="SELECT * FROM chocolate LIMIT 10";
    //第一次載入時初始化每頁顯示資料筆數(num_per_page)為10，之後則是GET 表單submit之後的值
    if (empty($_POST['num_per_page'])){
        //echo "test1 沒有GET num_per_page ";
        $num_per_page = 10;
    } else{
        //echo "test2 有GET num_per_page";
        $num_per_page = $_POST['num_per_page'];
    }
   
    //第一次載入時初始化start和end變數，之後則是GET 表單submit之後的值
    if (empty($_POST['start_number']) && empty($_POST['end_number']) ){
        $start_number = 1;
        $end_number = 10;
        //echo "初始化START & END";
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;
     } else {
        $start_number = $_POST['start_number'];
        $end_number = $_POST['end_number'];
        //echo "接收到START & END<br>";
     };

    //每一頁顯示筆數-預設為10  如果有接收到清單選定的值則用變數接 然後再把變數submit出去以便第二次載入用--------------------------
    if (isset($_POST['submit1']) && isset($_POST['selected_number'])){
        $num_per_page = $_POST['selected_number'];
        $end_number = $start_number + $_POST['selected_number'] - 1;
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN ".$start_number." and ".$end_number;
    };
    
    //搜尋功能- 按下搜尋鍵且不為空字串--------------------------------------------------------------------------------------
    if (isset($_POST['search1']) && isset($_POST['search_text']))  {
        $sql = "SELECT * FROM chocolate WHERE Data_name LIKE '%".$_POST['search_text']."%' Limit 10";
    };

    //下一頁和上一頁(n個商品)------------------------------------------------------------------------------------------------
    if (isset($_POST['next1'])){
        $start_number += $num_per_page;
        $end_number += $num_per_page ;
        //限制可查詢商品數 只到id:100 方便測試最後一頁 總共有425筆商品      
        if ($end_number > 100){
            $start_number = 100 - $num_per_page + 1;
            $end_number = 100;
        }
        // echo $start_number.$end_number;
        $sql = "SELECT * FROM chocolate WHERE Data_orderid BETWEEN ".$start_number." and ".$end_number;
    
    }elseif(isset($_POST['previous1'])){
        
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
    if (isset($_POST['order_highest'])){
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 1 and 100  ORDER BY Data_price DESC limit 100";
    }else if (isset($_POST['order_lowest'])){
        $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 1 and 100  ORDER BY Data_price ASC limit 100";
    };
    //echo $start_number."--".$end_number."--".$num_per_page;

    //進行SQL查詢---------------------------------------------------------------------------------------
    $result = $conn->query($sql);
    
    echo "<div id='flex-container'>";
    echo "<table border='5px' > ";
    if ($result->num_rows > 0) {
    
        echo "<tr><th>編號</th><th>圖片</th><th>品名</th><th>價格</th><th>購買數量</th><th>加入購物車</th><tr>";
        while($row = $result->fetch_assoc()) {
            // echo  $row["Data_name"].  $row["Data_price"]."<br>";
            
            echo "<tr><th>".$row['Data_orderid']."</th>";
            echo "<td><img src=./chocolate_images/".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'></td>";
            echo "<td>".$row['Data_name']."</td><td>"."\$".$row['Data_price']."</td>";

            echo "<td><input type='number' id='quantity".$row['Data_orderid']."' name='quantity' value='0' min='0' max='99'></td>";
            echo "<td><input type='button'  onclick='addProduct(this.name)' name='button".$row['Data_orderid']."' value='加入購物車'/></td>";
            echo "<input type='hidden' id='productArray".$row['Data_orderid']."' value='[".$row['Data_orderid'].",".$row['Data_pid'].",".$row['Data_name'].",".$row['Data_price']." ]'/></tr>";
            
        }
    } else {
    echo "0 results";
    }

    echo "</table>";
    

    $result->close();
    $conn->close();
    

    ?>
            <!--flex-container的 end div  -->
            </div>
        
        

        <!-- 下面三個start,end ,number 為第二次以後載入頁面，要列出的資料開頭 結束 及 每頁呈現筆數   -->
        <input type="hidden" name="start_number"  value="<?php echo $start_number; ?>">
        <input type="hidden"  name="end_number"  value="<?php echo $end_number; ?>">
        <input type="hidden"  name="num_per_page"  value="<?php echo $num_per_page; ?>">
        
        <!-- <input type="text"  name="testarray"  value="<?//php echo $testarray=['123456']; ?>"> -->
        <!-- <input type="text"  name="shoppingCart"  value="<?php //print_r($shoppingCart); ?>"> -->

    </form>
    <!-- content的 end div  -->
    
    </div>
    <!--page的 end div  -->
    </div> 

    <?php   
        // if (!isset($_SESSION["shoppingCart"])){
        //     $shoppingCart = [ ];
        // } else {
        //     print_r($_SESSION["shoppingCart"]);
        //     $shoppingCart = $_SESSION["shoppingCart"];
        // }
        // $shoppingCart = ["productId"=>array("productName", "productPrice", "productQuantity") ];   
        // $_SESSION["shoppingCart"] = $shoppingCart ?>
    <?php
         
         //$shoppingCart = ["productId"=>array("productName", "productPrice", "productQuantity") ];
        //$shoppingCart += [1,array(2,3,4)];
        // if (!empty($_POST["shoppingCart"])){
        //     $shoppingCart = [ ];
        // echo "沒有購物推車";    
        // print_r($shoppingCart);}
        //if (isset($_SESSION["shoppingCart"]))
        //{echo "YES";}else{echo "NO";}
        ?>

        
    <?php
    
    //echo("<meta http-equiv='refresh' content='1'>");
    //echo date('H:i:s Y-m-d');
    ?>
<!--以上 PHP區域  -------------------------------------------------------------------------------------------------------------------------- -->
    
    <script>
            // function functiontest(){
                // alert('Hello');
                // document.getElementById("fortest").innerHTML= "123456";}
    </script>


    <!-- <script>
        function functiontest(str) {
            alert("TEST");
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                console.log(this.readyState);
                console.log(this.status);
            if (this.readyState == 4 && this.status == 200) {
                alert("TEST");
                 document.getElementById("flex-container").innerHTML = this.responseText;
             }
           
            xmlhttp.open("GET","searchDatabase.php?s1="+str,true);
            xmlhttp.send();
            }; 
        }
        
        //functiontest("義美")
    </script>  -->
    </body>
    <!-- <a href="./searchDatabase.php?s1=義美" target="_blank">test123456</a> -->


    <?php require_once 'searchDatabase.php';?>
<!--以下Javascript 區域  -------------------------------------------------------------------------------------------------------------------------- -->   
    <script language="javascript" >

    // $("#btnHide").click(function(){
    // $("h1").hide();})
    //SELECT `chocolate`.`Data_brand`,COUNT(*) FROM `chocolate` Group BY `chocolate`.`Data_brand` ORDER BY COUNT(*) DESC;

    
    function functiontest(text){
        //alert(text);

        document.getElementById("flex-container").innerHTML = "";
        switch (text){
            case "義美":
                console.log(text)
                test = "<?php echo searchBrand('義美'); ?>"
                break;
            case "瑞士蓮":
                console.log(text)
                test = "<?php echo searchBrand('瑞士蓮'); ?>"
                break;
            case "77":
                console.log(text)
                test = "<?php echo searchBrand('77'); ?>"
                break;
            case "家樂福":
                console.log(text)
                test = "<?php echo searchBrand('家樂福'); ?>"
                break;
            case "LOTTE":
                console.log(text)
                test = "<?php echo searchBrand('LOTTE'); ?>"
                break;
            case "甘百世":
               console.log(text)
                test = "<?php echo searchBrand('甘百世'); ?>"    
                break;
            case "Hershey's":
               console.log(text)
                test = "<?php echo searchBrand('Hershey'); ?>"   
                break;
            case "明治":
               console.log(text)
                test = "<?php echo searchBrand('明治'); ?>"    
                break;
            case "露特":
                console.log(text)
                test = "<?php echo searchBrand('露特'); ?>"    
                break;
            case "費列羅":
                console.log(text)
                test = "<?php echo searchBrand('費列羅'); ?>"    
                break;
            case "健達":
                console.log(text)
                test = "<?php echo searchBrand('健達'); ?>"    
                break;
            default:
                console.log("沒有符合的switch條件");
        }
        
        document.getElementById("flex-container").innerHTML = test;
    }
    
    function addProduct(buttonName){
        //按下Button後取得目前Batton的name(第幾個按鈕)，再用name轉換成(input)欄位的ID去查詢購買數量
        alert("this.name為"+buttonName);
        let quantityId = buttonName.replace("button","quantity");
        let quantity = document.getElementById(quantityId).value;
        alert("購買數量為" + quantity); 

        let productArrayId = buttonName.replace("button","productArray")
        //alert("Array"+document.getElementById(productArrayId).value); 
        let stringArray = document.getElementById(productArrayId).value;
        let productArray = stringArray.slice(1, -1).split(",");
        productArray.push(quantity);

        // for (a in productArray) {
        //     alert(productArray[a]);
        // }
 
        location.href=`./getsession.php?shoppingItem=${productArray}`
        }


        //location.href = "http://localhost:8080/Project/searchDatabase.php" ;}
        
        //location.href="./searchDatabase.php?s1=義美";}
        //document.getElementById("flex-container").innerHTML ="<?//php search('義美'); ?>" ;}
    </script>
    </html>