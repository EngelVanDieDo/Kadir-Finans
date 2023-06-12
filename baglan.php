<?php
/*try{ $db=new PDO("mysql:host=localhost;dbname=yorum-ajax;charset=utf8","root","");
   
}
catch(Exception $e){
 print $e->getMessage();
}*/
$host="localhost";
$kullanici="root";
$parola="";
$vt="yorum-ajax";

$db=mysqli_connect($host,$kullanici,$parola,$vt);
mysqli_set_charset($db,"UTF8");
if($db){

}
?>