<?php
/* 
 * 一个数的组合
 **/
$dsn = "mysql:host=localhost;dbname=test";
$db = new PDO($dsn, 'root', '');
$sql= "select * from test";
$rs = $db->query($sql);
$newarray = array();

while($row = $rs->fetch()){
    $array = array($row[1], $row[2], $row[3], $row[4], $row[5]);
    $array = array_values(array_unique($array));
    $num = count($array);
    
    foreach( $array as $k=>$v ){
        $newarray[] = $v;
    }
    
}
$sort = array_count_values($newarray);
arsort($sort);
var_dump($sort);
?>

