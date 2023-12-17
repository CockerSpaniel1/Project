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

// $sql = "SELECT * FROM chocolate";
$sql = "SELECT * FROM chocolate LIMIT 20";
// $sql = "SELECT * FROM chocolate Where Data_name = '韓國樂天杏仁可可球46g' ";
// $sql = "SELECT * FROM chocolate ORDER BY Data_price limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo  $row["Data_name"].  $row["Data_price"]."<br>";
    
    echo  "<img src=.\chocolate_images\\".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'>";
    echo  $row["Data_pid"].$row["Data_name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

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