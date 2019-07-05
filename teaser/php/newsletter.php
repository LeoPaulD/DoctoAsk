<?php
try {
  $bd = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'phpmyadmin', '9217J1601');
   $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    $msg = 'Erreur PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    error_log($msg);
    die('<div class="alert>
      La base de données ne répond pas
    </div>');
  }
  if( isset($_POST['mail']) && $_POST['mail'] != "")
  {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
      $mail=$_POST['mail'];
      $typeClient=$_POST['type'];
      $date=date("y-m-d");

      $req =$bd -> prepare ("INSERT INTO newsletter (mail, typeClient, date) VALUES (?,?,?)");
      $req->execute(array($mail,$typeClient,$date));
      echo 'success';
    } else {
        echo 'bad-format';
    }
  }
  else{ // Sinon
    echo "non-valide";
  }
  ?>
