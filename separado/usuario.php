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
$sql = "INSERT INTO usuario (idusuario, nome_usuario, senha_usuario, email_usuario) VALUES (?, ?, ?, ?)";

// Prepare the SQL query template
if($stmt = $conn->prepare($sql)) {
  // Bind parameters
  $stmt->bind_param("sss", $idusuario, $nome_usuario, $senha_usuario, $email_usuario);

  // Set parameters and execute
  $idusuario = 1;
  $nome_usuario = "John";
  $senha_usuario = "password123";
  $email_usuario = "john@example.com";
  $stmt->execute();

  $idusuario = 2;
  $nome_usuario = "Mary";
  $senha_usuario = "password456";
  $email_usuario = "mary@example.com";
  $stmt->execute();

  $idusuario = 3;
  $nome_usuario = "Julie";
  $senha_usuario = "password789";
  $email_usuario = "julie@example.com";
  $stmt->execute();
  echo "Sucesso! Novos registros criados com sucesso.";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>