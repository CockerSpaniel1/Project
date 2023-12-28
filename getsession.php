<title>這是台購物車</title>
<!-- <form id="f2" name="f2" method="post" action="<?php //$_SERVER['PHP_SELF']?>"> -->
<?php
session_start();

//if (isset($_SESSION["shoppingCart"])){
//print_r($_SESSION['shoppingCart']);

if (isset($_GET["shoppingItem"])){
    $productString = $_GET["shoppingItem"];
    $productArray =explode(",",$productString);

   
    //echo gettype($productArray);
    //print_r($productArray);
    echo "<br>有收到商品<br>";
    //明天改試session
        if (isset($_SESSION['shoppingCart'])){
            
            print_r($_SESSION['shoppingCart']);
            
            echo "<br><br>有收到購物車<br>";
            $shoppingCart = $_SESSION['shoppingCart'];

            echo "將商品加入購物車<br>";
            addToCart($productArray);

            echo "<br>查看新增商品後的購物車<br>";
            print_r($_SESSION['shoppingCart']);
        }else{
            echo "<br>沒有收到購物車 新增一台空購物車<br>";
            $shoppingCart  = [];
            print_r($shoppingCart);

            echo "<br>將商品加入購物車<br>";
            addToCart($productArray);

            echo "<br>查看新增商品後的購物車<br>";
            print_r($shoppingCart);
        }
    echo "<br>送出購物車<br>";
    $_SESSION['shoppingCart'] = $shoppingCart;

    header("Location: ./test2.php");    
    } else {
        echo "沒有收到商品<br>";
        
        if (isset($_SESSION['shoppingCart'])){
            echo "查看目前購物車內的商品<br>";
            //print_r($_SESSION['shoppingCart']);

            $tempArray = $_SESSION['shoppingCart'];
            echo  "<table border='5px'> ";
            echo  "<tr><th>編號</th><th>圖片</th><th>品名</th><th>價格</th><th>購買數量</th><th>金額</th><tr>";
            

            foreach($tempArray as $productId => $productDetail){
                //echo "<hr>";
                echo  "<tr><th>".$productId."</th>";
                
                //echo "productId<br>";
                //echo $productId;

                //echo "<br>productDetail<br>";
                //print_r($productDetail);

                //echo  "<tr><th>".$productDetail['Data_orderid']."</th>";
                echo  "<td><img src=./chocolate_images/".$productDetail['Data_pid'].".jpg alt='沒有圖片' width='100px'></td>";
                echo  "<td>".$productDetail['Data_name']."</td><td>"."\$".$productDetail['Data_price']."</td>";
                echo  "<td>".$productDetail['Data_quantity']."</td>";
                //echo gettype(intval($productDetail['Data_price']));  
                //echo gettype(intval($productDetail['Data_quantity']));
                $sub_total = intval($productDetail['Data_price']) * intval($productDetail['Data_quantity']); 
                echo  "<td>".$sub_total."</td>";


                // for($i=1;$i<=3;$i++){
                //     //
                //     echo  "<td><img src=./chocolate_images/".$productDetail[$i].".jpg alt='沒有圖片' width='100px'></td>";
                //     echo  "<td>".$productDetail[$i]."</td><td>"."\$".$productDetail[$i]."</td>";
                //     echo  "<td><input type='number' id='quantity' name='quantity' value='0' min='0' max='99'></td>";
                //     echo $productDetail[$i];
                // }


                //echo gettype(string($key));
                //print_r($tempArray[$key]);
            
           

            
                // echo   $row["Data_name"].  $row["Data_price"]."<br>";
                // echo  "<td>&nbsp;&nbsp;&nbsp;0</td></tr>";
                
            }
        }else{
            echo "目前沒有購物車";
            
        };
        //echo $_SESSION["id"];
        //echo $_SESSION[""];
        //$test = $_SESSION["testarray2"];
        //print_r($test);
        
        // foreach ($test as $a){
        //     foreach ($a as $i){
        //         echo $i;
        //     }
        // }
        //if (array_key_exists("key4",$test))
        //{
        //echo "Key exists!";
        //}       
}   
//print_r($shoppingCart);


?>
<!-- <input type="hidden"  name="shoppingCart[]"  value="<?php //echo $shoppingCart; ?>"> -->

<!-- <input type="submit" id="submit1" name="submit1" value="加入購物車" /> -->
<!-- </form> -->




<?php 
// if ($shoppingCart)
//$shoppingCart = array();
function addToCart($a){
    global $shoppingCart;
    //$shoppingCart['testkey'] = ['testvalue'];
    $shoppingCart[$a[0]] = array("Data_pid"=>$a[1],"Data_name"=>$a[2],"Data_price"=>$a[3],"Data_quantity"=>$a[4]) ;

    //[ $array[0]=> array($array[1],$array[2],$array[3],$array[4])];
 }

//addToCart($productArray);

//$a = $productArray ;
    // foreach($productArray as $i){
    //     echo $i;
    // }
//print_r($shoppingCart["1"]);
//addToCart($productArray) ;
//$shoppingCart += [$a[0]=> array($a[1],$a[2],$a[3],$a[4]) ];
//print_r($shoppingCart);




//$shoppingCart += [ "key"=> array($array[1],2,3,4)];
//function addItem(product){
//print_r($shoppingCart);
?>