<?php 

function getDbConnection() {
  $config = require 'config.php';
  $db = $config['db'];
  
  try {
      $dsn = "pgsql:host={$db['host']};port={$db['port']};dbname={$db['dbvox']}";
      $pdo = new PDO($dsn, $db['user'], $db['password'], [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false,
      ]);
      return $pdo;
  } catch (PDOException $e) {
      error_log("Database connection failed: " . $e->getMessage());
      die("Ocorreu um erro ao conectar ao banco de dados. Por favor, tente novamente.");
  }
}

$pdo = getDbConnection();
?>
