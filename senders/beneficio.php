<!-- HEAD -->
<?php include_once "../modulos/head.php"; ?>
<!-- HEADER -->
<?php include_once "../modulos/header.php"; ?>

	<div class="content">
		<?php
			if ($_POST['txtIdade'] < 64){
				include "../modulos/detcss.php";
				break;
			}
				require_once('../phpmailer/class.phpmailer.php');

				if ($_SERVER['REQUEST_METHOD'] == "POST")  {
						$genero			= strtoupper($_POST['txtGenero']);
						$nome			= strtoupper($_POST['txtNome']);
						$nascimento 	= strtoupper($_POST['txtNascimento']);
						$idade 			= strtoupper($_POST['txtIdade']);
						$cpf 			= strtoupper($_POST['txtCpf']);
						$tel    		= strtoupper($_POST['txtTel']);
						$mae 			= strtoupper($_POST['txtMae']);
						// $tempo 			= $_POST['txtTempo'];
						$opt1 			= strtoupper($_POST['txtGrupo1']);
						$opt2 			= strtoupper($_POST['txtGrupo2']);

						$mailer = new PHPMailer();
						$mailer->isSMTP();
						$mailer->isHTML(true);
						$mailer->CharSet = 'utf-8';
						// $mailer->SMTPDebug = 1;
						$mailer->Port = 587; //Indica a porta de conex�o para a sa�da de e-mails
						$mailer->Host = 'localhost'; //smtp.dominio.com.br
						$mailer->SMTPAuth = true; //define se haver� ou n�o autentica��o no SMTP
						// $mailer->SMTPSecure = "tls";
						$mailer->Username = 'site@servprevi.com.br'; //Informe o e-mai o completo
						$mailer->Password = 'servPrevi2020br'; //Senha da caixa postal
						$mailer->setFrom('site@servprevi.com.br', 'ServPrevi'); //Obrigat�rio ser a mesma caixa postal indicada em "username"
						$mailer->addAddress('site@servprevi.com.br'); //Destinat�rios

						$mailer->Subject = "BENEFÍCIO ASSISTENCIAL AO IDOSO (BPC)";
						$mailer->Body = "<b>GÊNERO:</b> $genero <br/><br/>" .
										"<b>NOME:</b> $nome <br/><br/>" .
										"<b>DATA DE NASCIMENTO:</b> $nascimento <br/><br/>" .
										"<b>IDADE:</b> $idade <br/><br/>" .
										"<b>CPF:</b> $cpf <br/><br/>" .
										"<b>TELEFONE:</b> $tel <br/><br/>" .
										"<b>NOME DA MÃE:</b> $mae <br/><br/>" . 
										"<b>RECEBE BENEFÍCIO DO INSS:</b> $opt1 <br/><br/>" .
										"<b>TEM CADASTRO ÚNICO:</b> $opt2 <br/><br/>";

						if($mailer->Send()) {
							include 'ok.php';
							exit;
						} else{
							include 'erro.php';
							exit;
						}
				}
		?>

	</div>