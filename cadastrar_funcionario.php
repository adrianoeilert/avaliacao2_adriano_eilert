<?php



echo '<pre>';
print_r($_POST);
// abre conexão com o banco
$mysqli = new mysqli("127.0.0.1", "user", "pass", "database");
// prepara a SQL para receber os parametros. Neste caso, apenas 1.
$con = $mysqli->prepare("INSERT INTO usuarios (nome, usuario, senha) VALUES (?, ?, ?)");
// atribui a variável $id ao primeiro ?, com o filtro “i” (inteiro). Filtros aceitos: i - inteiro, d - double, s - string, b - blob
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$nome > bind_param("sss", $nome, $email, $senha);
// executa a query já com o parâmetro incluído
$con > execute();

header('location:funcionarios.php');

