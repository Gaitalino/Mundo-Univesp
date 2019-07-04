<?php
	include_once "bd.php";
	$acao = $_GET['acao']; 
	
	if($acao == 0){
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$query = "select * from usuarios where email = :email and senha = :senha";
		$stmt = $pdo->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':senha', $senha);
		$stmt->execute();
		$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
		if($usuario <> null){
			session_start();
			$_SESSION['autoriza_login'] = 1;
			$_SESSION['usuario'] = $usuario;
			header('Location:home.php');
			}else{
				header('Location:login.php?erro=1');
		}
	}

	if($acao == 1){
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$bimestre = $_POST['bimestre'];
		$senha = $_POST['senha'];
		$tipo = 1;
		$id_video1 = 1;
		$id_video2 = 2;
		$id_video3 = 3;
		$query = "insert into usuarios (nome,email,senha,tipo,id_video1,id_video2,id_video3,bimestre) values( :nome, :email, :senha, :tipo, :id_video1, :id_video2, :id_video3, :bimestre)";
		$stmt = $pdo->prepare($query);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':senha', $senha);
		$stmt->bindParam(':tipo', $tipo);
		$stmt->bindParam(':id_video1', $id_video1);
		$stmt->bindParam(':id_video2', $id_video2);
		$stmt->bindParam(':id_video3', $id_video3);
		$stmt->bindParam(':bimestre', $bimestre);
		$stmt->execute();
		header('Location:login.php?sucess=1');
	}

	if($acao == 2){
		session_start();
		$id_usuario = $_SESSION['usuario']['id_usuario'];
		$tipo_conteudo = $_POST['tipo_conteudo'];
		$conteudo_univesp = $_POST['conteudo_univesp'];
		$titulo = $_POST['titulo'];
		$url = $_POST['url'];
		$curso = $_POST['curso'];
		$bimestre = $_POST['bimestre'];
		$disciplina = $_POST['disciplina'];
		$semana = $_POST['semana'];
		$query = "insert into videos (video_nome,url,status,univesp,visualizacoes,id_disciplina,id_usuario,semana) values( :video_nome, :url, 0, :univesp, 0, :id_disciplina, :id_usuario, :semana)";
		$stmt = $pdo->prepare($query);
		$stmt->bindParam(':video_nome', $titulo);
		$stmt->bindParam(':url', $url);
		$stmt->bindParam(':univesp', $conteudo_univesp);
		$stmt->bindParam(':id_disciplina', $disciplina);
		$stmt->bindParam(':id_usuario', $id_usuario);
		$stmt->bindParam(':semana', $semana);
		$stmt->execute();
		header('Location:cadastro_conteudo.php?sucesso=2');
	}


	

	





?>