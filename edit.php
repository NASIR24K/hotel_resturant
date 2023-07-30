
<?php
include('../inc.php');
$pk=$_REQUEST['ID'];
$name= htmlspecialchars($_REQUEST['name']);
$address= htmlspecialchars($_REQUEST['address']);
$phone= htmlspecialchars($_REQUEST['Phone']);
$password= htmlspecialchars($_REQUEST['Password']);
print $sql='UPDATE `customer_info` SET 
							`cus_name`="'.$name.'",
							`cus_address`="'.$address.'",
							`cus_phone`="'.$phone.'",
							`user_password`="'.$password.'" 
							 WHERE `customer_id`="'.$pk.'"';
$res=mysqli_query($db,$sql);
print $msg=($res)?1:0 ;

?>
edit.php
Displaying edit.php.