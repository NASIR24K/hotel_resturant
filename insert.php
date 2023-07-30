
<?php
include('../inc.php');
$tblName="customer_info";

$name= htmlspecialchars($_REQUEST['name']);
$address= htmlspecialchars($_REQUEST['address']);
$phone= htmlspecialchars($_REQUEST['Phone']);
$password= htmlspecialchars($_REQUEST['Password']);

$myID=MAKE_ID("CUS-",10,'customer_info','customer_id');
$sql='INSERT INTO customer_info VALUES(
                          "'.$myID.'", "'.$name.'", "'.$address.'", "'.$phone.'" ,"'.$password.'")';

 $result=mysqli_query($db,$sql);
 print $msg=($result) ? 1:0;

?>
select.php
Displaying select.php.