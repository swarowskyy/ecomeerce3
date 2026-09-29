<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomeerce2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}

// SQL query template
$sql = "INSERT INTO usuario ( nome_usuario, senha_usuario, email_usuario) VALUES ( ?, ?, ?)";

// Prepare the SQL query template
if($stmt = $conn->prepare($sql)) {
  // Bind parameters
  $stmt->bind_param("sss",  $nome_usuario, $senha_usuario, $email_usuario);

  // Set parameters and execute

  $nome_usuario = "John";
  $senha_usuario = "password123";
  $email_usuario = "john@example.com";
  $stmt->execute();

  
  $nome_usuario = "Mary";
  $senha_usuario = "password456";
  $email_usuario = "mary@example.com";
  $stmt->execute();

 
  $nome_usuario = "Julie";
  $senha_usuario = "password789";
  $email_usuario = "julie@example.com";
  $stmt->execute();
  echo "Sucesso! Novos registros criados com sucesso.";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO pedido (usuario_idusuario, data_pedido, valor_total_pedido, forma_pagamento) VALUES (?, ?, ?, ?)";

// Prepare the SQL query template
if($stmt = $conn->prepare($sql)) {
    // i (inteiro), s (string/data), d (decimal/double), s (string)
    $stmt->bind_param("isds", $idusuario, $data_pedido, $valor_total_pedido, $forma_pagamento);

    // Set parameters and execute
    $idusuario = 1;
    $data_pedido = "2023-01-01";
    $valor_total_pedido = 100.00;
    $forma_pagamento = "john@example.com";
    $stmt->execute();

    $idusuario = 2;
    $data_pedido = "2023-01-02";
    $valor_total_pedido = 200.00;
    $forma_pagamento = "mary@example.com";
    $stmt->execute();

    $idusuario = 3;
    $data_pedido = "2023-01-03";
    $valor_total_pedido = 300.00;
    $forma_pagamento = "julie@example.com";
    $stmt->execute();
 
    echo "Sucesso nos pedidos!<br>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO produto (nome_produto, preco_produto, foto_produto) VALUES (?, ?, ?)";

if($stmt = $conn->prepare($sql)) {
    // s (string para nome), d (double para preco), s (string para foto)
    $stmt->bind_param("sds", $nome_produto, $preco_produto, $foto_produto);

    // Registo 1
    $nome_produto = "Produto 1";
    $preco_produto = 100.00;
    $foto_produto = "foto1.jpg";
    $stmt->execute();

    // Registo 2
    $nome_produto = "Produto 2";
    $preco_produto = 200.00;
    $foto_produto = "foto2.jpg";
    $stmt->execute();

    // Registo 3
    $nome_produto = "Produto 3";
    $preco_produto = 300.00;
    $foto_produto = "foto3.jpg";
    $stmt->execute();
    
    echo "Sucesso nos produtos!<br>";
    $stmt->close();
} else {
    echo "Erro (Produto): " . $conn->error . "<br>";
}
$sql = "INSERT IGNORE INTO contem (pedido_idpedido, produto_idproduto, quantidade_contem) VALUES (?, ?, ?)";
if($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("iii", $pedido_idpedido, $produto_idproduto, $quantidade_contem);

    $pedido_idpedido = 1; 
      $produto_idproduto = 1; 
       $quantidade_contem = 2; 
        $stmt->execute();
    $pedido_idpedido = 2; 
      $produto_idproduto = 2; 
       $quantidade_contem = 3; 
        $stmt->execute();
    $pedido_idpedido = 3; 
      $produto_idproduto = 3; 
       $quantidade_contem = 1; 
        $stmt->execute();
    
    echo "Tabela  processada com sucesso!<br>";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}
$stmt->close();
$conn->close(); 