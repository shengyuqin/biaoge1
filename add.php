<?php
include "db.php";
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];
$db->query("insert into stu(name,age,sex) values ('','','')");
echo $db->insert_id;//当前插入的id为多少的
?>