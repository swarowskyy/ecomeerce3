<!DOCTYPE html>
<html>
<body>
    <h2>Cadastro de Usuário</h2>
<form action="conexao_todos.php" method="post" enctype="multipart/form-data">
Nome: <input type="text" name="nome_usuario"><br>
E-mail: <input type="email" name="email_usuario"><br>
Senha: <input type="password" name="senha_usuario"><br>
</form>


<h2>Cadastro de Produto</h2>
<form action="conexao_todos.php" method="post" enctype="multipart/form-data">
  Nome: <input type="text" name="nome_produto"><br>
  Preço: <input type="number" name="preco_produto" step="0.01" min="0"><br>
  Selecione imagem do produto para upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Enviar Imagem" name="foto_produto">
</form>

<h2>Informações do Pedido</h2>
<form action="conexao_todos.php" method="post" enctype="multipart/form-data">
Data do pedido: <input type="text" name="data_pedido"><br>
Preço total do pedido: <input type="number" name="valor_total_pedido" step="0.01" min="0"><br>
Forma de pagamento: <input type="text" name="forma_pagamento"><br>
</form>
</body>
</html>