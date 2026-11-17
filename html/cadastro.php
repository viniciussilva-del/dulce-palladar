<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro | Dulce Palladar</title>
  <link rel="stylesheet" href="../login/style.css">
</head>
<body>
  <form class="form" data-mode="register">
    <div class="form-header">Dulce Palladar</div>
    <span class="input-span"><label for="name" class="label">Nome</label><input type="text" id="name" required></span>
    <span class="input-span"><label for="email" class="label">Email</label><input type="email" id="email" required></span>
    <span class="input-span"><label for="password" class="label">Senha</label><input type="password" id="password" required></span>
    <input class="submit" type="submit" value="Cadastrar">
    <span class="span">Já tem conta? <a href="../login/form.html">Entrar</a></span>
  </form>
  <script src="../scripts.js"></script>
</body>
</html>
