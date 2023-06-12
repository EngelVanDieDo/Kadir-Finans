<?php
$dsn = 'mysql:host=localhost;dbname=yorum-ajax;charset=utf8mb4';
      $username = 'root';
      $password = '';
      $options = array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES => false,
      );
      $pdo = new PDO($dsn, $username, $password, $options);
      
      $query = "SELECT * FROM yorumlar ORDER BY ID DESC";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
    
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

         echo "<li class='yorumli' id='li1'>" .
     "<div class='li-hiza'>" .
     "<img src='assets/İmg/icon-kayıt.png' alt='alt'>" . htmlspecialchars($row["ad"] . " " . $row["soyad"]) . ":" . "</div>" . htmlspecialchars($row["yorum"]) . "</li>";
      }
                                                      
?>