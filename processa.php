<?php
session_start();


include_once("conexao.php");

$data = $_REQUEST['data'];
$servicos = $_REQUEST['servicos'];
$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone'];


$data = explode(" ", $data);
list($date, $hora) = $data;
$data_sem_barra = array_reverse(explode("/", $date));
$data_sem_barra = implode("-", $data_sem_barra);
$data_sem_barra = $data_sem_barra . " " . $hora;


if(empty($_POST['nome']) || empty($_POST['data']) || empty($_POST['servicos'])){
	$_SESSION['msg'] = "<div class='alert alert-warning'>Preencha os campos corretamente</div>";
	header("Location: index.php"); 
}else{

	$result_data = "INSERT INTO agendamentos(servicos, data, nome, telefone) VALUES ('$servicos','$data_sem_barra','$nome','$telefone')";
	$resultado_data = mysqli_query($conn, $result_data);

	
	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<div class='alert alert-success'>Agendamento efetuado com sucesso</div>";
		header("Location: index.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao efetuar o agendamento</div>";
		header("Location: index.php");
	}
	
}





?>