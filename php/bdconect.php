<?php 

//connect db test
$endereco = 'localhost';
$banco = 'vox';
$user = 'postgres';
$password = '17';

try {
$pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

echo "Conectado ao banco de dados";

} catch (PDOException $e) {
echo "Falha na conexão.";
die($e->getMessage());
}

?>