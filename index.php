<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="/teste-vox/css/styles.css">
  <script src="/teste-vox/js/main.js" defer></script>


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="validate-container">
        <?php if (!empty($_GET['msgError'])) { ?>
            <div class="alert-fail" role="alert">
                <?php echo $_GET['msgError']; ?>
            </div>
        <?php } ?>

        <?php if (!empty($_GET['msgSuccess'])) { ?>
            <div class="alert-success" role="alert">
                <?php echo $_GET['msgSuccess']; ?>
            </div>
        <?php } ?>
    </div>

  <div class="main-container">
    <h1>Cadastro de Usuário</h1>
    <form action="/teste-vox/php/registerCheck.php" method="post" id="form">
        <div class="input">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Digite seu nome">
        </div>
        <div class="input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email">
        </div>
        <div class="input">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha">
        </div>

        <div class="button">
            <button type="submit" class="submit-button" >Cadastrar</button>
        </div>
    </form>
</div>
</body>
</html>