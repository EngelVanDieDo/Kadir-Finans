<?php
include "baglan.php";
if ($_POST) {
    $ad = $_POST['biletad'];

    if ($ad != "") {
        if ($db->connect_error) {
            die("Veritabanına bağlanırken hata oluştu: " . $db->connect_error);
        }

        $sql = "DELETE FROM bilet WHERE kullanıcı_ad = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $ad);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Başarıyla $ad Kullanıcısının Bileti Silindi";
            } else {
                echo "$ad Kullanıcısının Bileti Bulunamadı";
            }
        } else {
            echo "Bilet Silinirken Bir Hata Oluştu: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Lütfen Alanları Doldurunuz!";
    }
}

?>