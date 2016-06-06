<?php
/*  TEST
 * 三个数的组合
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

    if($num == 3){
        $newarray[] = $array[0].$array[1].$array[2];
    }else if( $num == 4 ){
        $newarray[] = $array[0].$array[1].$array[2];
        $newarray[] = $array[0].$array[2].$array[3];
        $newarray[] = $array[1].$array[2].$array[3];
    }else if($num == 5){
        $newarray[] = $array[0].$array[1].$array[2];
        $newarray[] = $array[0].$array[1].$array[4];
        $newarray[] = $array[0].$array[2].$array[3];
        $newarray[] = $array[0].$array[2].$array[4];
        $newarray[] = $array[0].$array[3].$array[4];
        $newarray[] = $array[1].$array[2].$array[3];
        $newarray[] = $array[1].$array[2].$array[4];
        $newarray[] = $array[1].$array[3].$array[4];
        $newarray[] = $array[2].$array[3].$array[4];
    }else if( $num == 2 ){
        $newarray[] = $array[0].$array[1];
    }
}
$sort = array_count_values($newarray);
arsort($sort);
var_dump($sort);
?>
