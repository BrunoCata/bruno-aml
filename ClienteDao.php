<?php

	include_once 'conexao.php';
	include_once './Bean/Cliente.php';

	class ClienteDao{

		function inserir(Cliente $cliente){
			
			$conn = conexao();

			$desnome = $cliente->getDesnome();
			$desemail = $cliente->getDesemail();
			$desendereco = $cliente->getDesendereco();

			try{

				$Statement = $conn->query("INSERT INTO tb_clientes (desnome, desemail, desendereco) VALUES ('$desnome', '$desemail', '$desendereco');");

			}catch(Excecao $excecao){

				echo "Erro: {$excecao->getMensagem()}";
				echo "Linha: {$excecao->getLinha()}";
			}
		}

		function listar(){
			$conn = conexao();

			try{

				$Statement = $conn->query("SELECT * FROM tb_clientes ORDER BY desnome;");

				while($row = $Statement->fetch(PDO::FETCH_ASSOC)){

					echo "<p>{$row['idcliente']} {$row['desnome']} {$row['desemail']} {$row['desendereco']}</p>";
				}
			
			}catch(Excecao $excecao){

				echo "Erro: {$excecao->getMensagem()}";
				echo "Linha: {$excecao->getLinha()}";
			}
			
		}

		function excluir(Cliente $cliente){
			$conn = conexao();

			$idcliente = $cliente->getIdcliente();

			try{

				$Statement = $conn->query("DELETE FROM tb_clientes WHERE idcliente = $idcliente;");

			}catch(Excecao $excecao){

				echo "Erro: {$excecao->getMensgem()}";
				echo "Linha: {$excecao->getLinha()}";
			}
		}

		function editar(Cliente $cliente){
			$conn = conexao();
			
			$idcliente = $cliente->getIdcliente();
			$desnome = $cliente->getDesnome();
			$desemail = $cliente->getDesemail();
			$desendereco = $cliente->getDesendereco();
			$dtcadastro = $cliente->getDtcadastro();

			try{

				$Statement = $conn->query("UPDATE tb_clientes SET desnome = '$desnome', desemail = '$desemail', desendereco = '$desendereco', dtcadastro = '$dtcadastro' WHERE idcliente = '$idcliente';");

			}catch(Excecao $excecao){

				echo "Erro: {$excecao->getMensagem()}";
				echo "Linha: {$excecao->getLinha()}";
			}
		}
	}
?>