<?php
include "db.php";
$sql="select * from stu";
$result=$db->query($sql);
$arr=array();
while($row=$result->fetch_assoc()){
    $arr[]=$row;
}
echo json_encode($arr);
?>