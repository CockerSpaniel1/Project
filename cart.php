<?php 
session_start() ?>


<!DOCTYPE html>
<html>
<body>

<?php
//associtive array 疑似不重複key 會取後面那個
$testarray2 = array("key1"=>array(1,2,3,4), "key2"=>array(5,6,7,8), "key3"=>array(9,10,11,12), "key3"=>array(9,10,11,12),"key4"=>array(13,14,15,16));
$testarray2  += [ "key5"=>array(1,2,3,4)];
//$testarray = array(array())
// Set session variables
//$_SESSION["favcolor"] = "green";
//$_SESSION["testarray"] = array(1,2,3,4);
$_SESSION["testarray2"] = $testarray2;
echo "Session variables are set.";

?>

<?php 
function senddata($key,$value){
    $_SESSION[$key] = $value;

}
senddata("testkey","testvalue");
?>

</body>
</html>