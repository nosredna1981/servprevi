<!-- HEAD -->
<?php include_once "../modulos/head.php"; ?>
<!-- HEADER -->
<?php include_once "../modulos/header.php"; ?>

<?php

		require_once('../phpmailer/class.phpmailer.php');

		if ($_SERVER['REQUEST_METHOD'] == "POST")  {
				$nome			= strtoupper($_POST['txtNome']);
				$email			= strtoupper($_POST['txtEmail']);
				$tel			= strtoupper($_POST['txtTel']);

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
				$mailer->setFrom('site@servprevi.com.br', 'Contato'); //Obrigat�rio ser a mesma caixa postal indicada em "username"
				$mailer->addAddress('site@servprevi.com.br'); //Destinat�rios

				$mailer->Subject = "CONTATO";
				$mailer->Body =   "<b>NOME:</b> $nome <br/><br/>" .
								   "<b>E-MAIL:</b> $email <br/><br/>" .
								   "<b>WHATSAPP:</b> $tel <br/><br/>";

				if($mailer->Send()) {
					include 'ok.php';
					exit;
				} else{
					include 'erro.php';
					exit;
				}
		}
?>
