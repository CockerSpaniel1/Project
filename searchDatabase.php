<script>
alert("載入searchDatabase")
</script>
<?php  
    //$score1=$_GET["s1"];
    echo "HIHI";
    
    //$str = "987654321";
    function search($text){
        $str = "";
        $servername = "localhost";
        $username = "root";
        $password = "A12345678";
        $dbname = "chocolate_db";
    
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM chocolate WHERE Data_brand LIKE '%".$text."%' Limit 100";

        $result = $conn->query($sql);
        echo  "<table border='5px'> ";
        if ($result->num_rows > 0) {
        
            echo  "<tr><th>編號1</th><th>圖片</th><th>品名</th><th>價格</th><th>購買數量</th><tr>";
            while($row = $result->fetch_assoc()) {
                // echo   $row["Data_name"].  $row["Data_price"]."<br>";
                
                echo  "<tr><th>".$row['Data_orderid']."</th>";
                echo  "<td><img src=./chocolate_images/".$row['Data_pid'].".jpg alt='沒有圖片' width='100px'></td>";
                echo  "<td>".$row['Data_name']."</td><td>"."\$".$row['Data_price']."</td>";
                echo  "<td><input type='number' id='quantity' name='quantity' value='0' min='0' max='99'></td>";
                // echo  "<td>&nbsp;&nbsp;&nbsp;0</td></tr>";
                
            }

        $result->close();
        $conn->close();

    
        } 
            
    } 

    //$str2 = search("義美");
    //$str2 .=  "HIHI22";
    //echo $str2;
    //return "<?php echo 'test123qweradsf' ?//>";
    //header("Location: ./test2.php");
    
    ?>