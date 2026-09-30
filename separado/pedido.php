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
$sql = "INSERT INTO pedido (idpedido, data_pedido, valor_total_pedido, forma_pagamento) VALUES (?, ?, ?, ?)";

// Prepare the SQL query template
if($stmt = $conn->prepare($sql)) {
  // Bind parameters
  $stmt->bind_param("sss", $idpedido, $data_pedido, $valor_total_pedido, $forma_pagamento);

  // Set parameters and execute
  $idpedido = 1;
  $data_pedido = "2023-01-01";
  $valor_total_pedido = 100.00;
  $forma_pagamento = "john@example.com";
  $stmt->execute();

  $idpedido = 2;
  $data_pedido = "2023-01-02";
  $valor_total_pedido = 200.00;
  $forma_pagamento = "mary@example.com";
  $stmt->execute();

  $idpedido = 3;
  $data_pedido = "2023-01-03";
  $valor_total_pedido = 300.00;
  $forma_pagamento = "julie@example.com";
  $stmt->execute(); 
 
  echo "Sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close(); 
?>