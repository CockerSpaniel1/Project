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
    <body>
    <form id="" name="" method="post" action="<?php $_SERVER['PHP_SELF'] ?>"  onsubmit="return fun1()">
    
      <!-- <input type="text"  id="" name=""   />
      <input type="submit" id="" name="" value="搜尋" /> -->
      <input type="text" id="i1" name="i11">
    </form>


<?php

function db_connection(){
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
    return $conn;}
// $conn->close();}




$c= db_connection();
// // $sql = "SELECT * FROM chocolate";
// // $sql = "SELECT * FROM chocolate LIMIT 10";
$sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 0 and 10";
// // $sql = "SELECT * FROM chocolate Where Data_name = '韓國樂天杏仁可可球46g' ";
// // $sql = "SELECT * FROM chocolate ORDER BY Data_price limit 10";

// $result = $conn->query($sql);

$result = $c->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo  $row["Data_name"].  $row["Data_price"]."<br>";
    
    echo  "<img src=.\chocolate_images\\".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'>";
    echo  $row["Data_orderid"].$row["Data_name"].$row["Data_price"]."<br>";
  }
} else {
  echo "0 results";
}

$c->close();
// $conn->close();

// 建立dataAccess物件的資料庫連接A12345678
// $dao = new dataAccess("localhost","root",
//                       "","product");
// $sql = "SELECT * FROM chocolate LIMIT 9" ;  // 建立SQL指令字串
// $dao->fetchDB($sql);  // 執行SQL查詢指令字串
// $flag = false;
// // 顯示資料庫內容
// while ( $row = $dao->getRecord() ) {
//    if ($flag) {
//       $flag = false;
//       $color="#FF99CC";
//    } else {
//       $flag = true;
//       $color="#99FFC";
//    }
   // 顯示選購商品的表單
?>
 </body>
 </html>