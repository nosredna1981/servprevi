<!-- HEAD -->
<?php include_once "../modulos/head.php"; ?>
<!-- HEADER -->
<?php include_once "../modulos/header.php"; ?>

		<div class="content">
			<?php
				if (($_POST['txtGenero'])=="Masculino"){
					if (($_POST['txtIdade']) < 53 OR ($_POST['txtTempo']) < 12){
						include "../modulos/detcss.php";
						break;
					}
				}

				if (($_POST['txtGenero'])=="Feminino"){
					if (($_POST['txtIdade']) < 48 OR ($_POST['txtTempo']) < 12){
						include '../modulos/detcss.php';
						break;
					}
				}

					require_once('../phpmailer/class.phpmailer.php');

					if ($_SERVER['REQUEST_METHOD'] == "POST")  {
							$genero			= strtoupper($_POST['txtGenero']);
							$nome			= strtoupper($_POST['txtNome']);
							$nascimento 	= strtoupper($_POST['txtNascimento']);
							$idade 			= strtoupper($_POST['txtIdade']);
							$cpf 			= strtoupper($_POST['txtCpf']);
							$tempo 			= strtoupper($_POST['txtTempo']);
							$tel    		= strtoupper($_POST['txtTel']);

							$mailer = new PHPMailer();
							$mailer->isSMTP();
							$mailer->isHTML(true);
							$mailer->CharSet = 'utf-8';
							$mailer->SMTPDebug = 1;
							$mailer->Port = 587; //Indica a porta de conex�o para a sa�da de e-mails
							$mailer->Host = 'localhost'; //smtp.dominio.com.br
							$mailer->SMTPAuth = true; //define se haver� ou n�o autentica��o no SMTP
							$mailer->SMTPSecure = "tls";
							$mailer->Username = 'site@servprevi.com.br'; //Informe o e-mai o completo
							$mailer->Password = 'M@er.469050_81'; //Senha da caixa postal
							$mailer->setFrom('site@servprevi.com.br', 'ServPrevi'); //Obrigat�rio ser a mesma caixa postal indicada em "username"
							$mailer->addAddress('site@servprevi.com.br'); //Destinat�rios

							$mailer->Subject = "APOSENTADORIA POR TEMPO OU IDADE";
							$mailer->Body = "<b>GÊNERO:</b> $genero <br/><br/>" .
											"<b>NOME:</b> $nome <br/><br/>" .
											"<b>DATA DE NASCIMENTO:</b> $nascimento <br/><br/>" .
											"<b>IDADE:</b> $idade <br/><br/>" .
											"<b>CPF:</b> $cpf <br/><br/>" .
											"<b>TEMPO:</b> $tempo <br/><br/>" .
											"<b>TELEFONE:</b> $tel <br/><br/>" ;

							if($mailer->Send()) {
								include 'ok.php';
								exit;
							} else{
								include 'erro.php';
								exit;
							}
					}
			?>

			<!-- <div class="teste">
				<a href="" class='btnBack'>Voltar</a>	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta laborum quibusdam mollitia nihil excepturi quo dolorem, at optio eligendi consequuntur asperiores sit error velit voluptatibus atque. Obcaecati dolores magni totam?</p>
			</div> -->
		</div>
	</body>
</html>