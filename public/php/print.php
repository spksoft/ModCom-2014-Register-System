<?php
mysql_connect('localhost','root','190537');
$query = "SELECT * FROM `student_info`";
$result = mysql_query($query);
echo var_dump($result);
?>
