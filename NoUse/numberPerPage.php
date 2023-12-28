
    <?php
    $end_number = "0";
    if (isset($_GET['s1'])){
        $end_number = $_GET['n_per_page'];
    };
    //---------------------------------------------
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
    
    $sql = "SELECT * FROM chocolate Where Data_orderid BETWEEN 0 and ".$end_number;

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
