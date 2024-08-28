<?php

require_once 'bdconect.php';

if (!empty($_POST)) {
  try{
    $sql = "INSERT INTO users
              (name, email, password)
            VALUES
              (:name, :email, :password)";

    $stmt = $pdo->prepare($sql);

    // para evitar sql injection
    $dates = array(
      ':name' => $_POST['name'],
      ':email' => $_POST['email'],
      ':password' => md5($_POST['password'])
    );

    // execute sql injection
    if ($stmt->execute($dates)) {
      header("Location: registerSuccess.php?msgSuccess=Cadastro realizado com sucesso!");
    }

  } catch (PDOException $e) {
      //die($e->getMessage)
      header("Location: index.php?msgError=Não foi possível realizar o cadastro.");
  }
 
  /* teste retorno dados 
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';*/
}
else {
  header("Location: index.php?msgError=Falha na autenticação");
}
die();


?>
