<!DOCTYPE html>
<html>
<body>
<!-- <script>
    function addItem(product){
        session_start()
        $_SESSION["id"] = product;
    }
    </script>     -->
    

<!-- <input type="button"  onclick=""> -->
<?php
//associtive array 疑似不重複key 會取後面那個

// $testarray2 = array("key1"=>array(1,2,3,4), "key2"=>array(5,6,7,8), "key3"=>array(9,10,11,12), "key3"=>array(9,10,11,12),"key4"=>array(13,14,15,16));
// $testarray2  += [ "key5"=>array(1,2,3,4)];
// $_SESSION["testarray2"] = $testarray2;
// echo "Session variables are set.";


//$testarray = array(array())
// Set session variables
//$_SESSION["favcolor"] = "green";
//$_SESSION["testarray"] = array(1,2,3,4);

?>
<?php 
$shoppingCart  = [];
$shoppingCart += [ "key"=> array(1,2,3,4)];
//function addItem(product){
print_r($shoppingCart);
?>


<?php 

function senddata($key,$value){
    session_start();
    $_SESSION[$key] = $value;
    echo "Session variables are set.";

}
//senddata("testkey2","testvalue2");

//session_destroy();
?>

</body>
</html>