
<form id="f2" name="f2" method="post" action="<?php $_SERVER['PHP_SELF']?>">
<?php
session_start();

//if (isset($_SESSION["shoppingCart"])){
if (isset($_GET["shoppingItem"])){
    $productString = $_GET["shoppingItem"];
    $productArray =explode(",",$productString);

   
    //echo gettype($productArray);
    //print_r($productArray);
    echo "<br>有收到商品<br>";
    //明天改試session
        if (isset($_POST['shoppingCart'])){
            echo "iftest";
            print_r($_POST['shoppingCart']);
            echo "有收到購物車";
            $shoppingCart = $_POST['shoppingCart'];
            addToCart($productArray);
        }else{
            echo "沒有收到購物車";
            $shoppingCart  = [];
        }

    
    //header("Location: ./test2.php");
     
    } else {
        echo "沒有收到商品";
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
        
}   print_r($shoppingCart);
?>
<input type="hidden"  name="shoppingCart[]"  value="<?php //echo $shoppingCart; ?>">

<input type="submit" id="submit1" name="submit1" value="加入購物車" />
</form>




<?php 
// if ($shoppingCart)
//$shoppingCart = array();
function addToCart($a){
    global $shoppingCart;
    //$shoppingCart['testkey'] = ['testvalue'];
    $shoppingCart[$a[0]] = array($a[1],$a[2],$a[3],$a[4]) ;
    //[ $array[0]=> array($array[1],$array[2],$array[3],$array[4])];
 }
addToCart($productArray);
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