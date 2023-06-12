<?php
include "baglan.php";
if($_POST){
$id = $_POST['sliderid'];

if( $id !=""){
if ($db->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $db->connect_error);
}

$sql = "DELETE FROM slider WHERE ID = $id";
$sql2 = "DELETE FROM tb_upload WHERE id = $id";
if ($db->query($sql) === TRUE and $db->query($sql2) === TRUE) {
    echo "ID $id başarıyla silindi.";
} else {
    echo "ID silinirken hata oluştu: " . $conn->error;
}
}
else{
	echo "Lütfen Alanları Doldurunuz!";
}
}
?>