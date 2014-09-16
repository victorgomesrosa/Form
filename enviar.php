<?php
$nome = $_REQUEST['nome'];
$razao_social = $_REQUEST['razao_social'];
$telefone = $_REQUEST['telefone'];
$email = $_REQUEST['email'];
$endereco = $_REQUEST['endereco'];
$destino = 'victorgomesrosa@outlook.com';
$mensagem = $_REQUEST['mensagem'];

$destinatario = $destino;
	
$titulo = "Pedido de Orcamento pelo site";
	
$msg = "Nome: $nome\n\nRazão Social: $razao_social\n\nE-mail: $email\n\nTelefone: $telefone\n\nEndereço: $endereco\n\n\nMensagem: $mensagem\n";
	
$parameters = $email;

if (empty($nome))
   
{
echo "<script> alert ('Formulario nao enviado!');</script>";
}
else {

mail($destinatario, $titulo, $msg, $parameters);
echo "<script> alert ('Formulario enviado com sucesso!');</script>";
}	
?>