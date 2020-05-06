<?php

try {
  $db = new PDO("mysql:host=localhost;dbname=rumeliedu",'root','');
  echo "taban bağlantısı başarılı  ";
} catch (PDOException $e) {
  echo "yanlışlıkvar";
  echo $e -> getMessage();

}


if ($db->exec('INSERT INTO cemcelalaltinay (page_title,page_text) VALUES ("PDO DENEME","text pdo text")')) {
  echo "Tabana ekleme başarılı    ";
}



 ?>
