<?php
include("helpers/PHPMailer.php");
include("helpers/SMTP.php");
include("helpers/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';

$fromemail = 'pruebasglendy@hotmail.com';
$fromname = "Panadería";
$host = "smtp.live.com";
$port = "587";
$SMTPAuth = "login";
$_SMTPSecure = "tls";
$password = "glendy12345";
$emailTo = $_POST["email"];
$subject = $_POST["subject"];
$msg = $_POST["message"];
$name = $_POST["name"];

try{

    $mail->isSMTP();

    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $_SMTPSecure;
    
    $mail->Username = $fromemail;
    $mail->Password = $password;
    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($emailTo);
    $mail->addBCC($fromemail);
    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $message = "<html>
				<body leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>
					<center>
						<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' style='background:#fff;'>
							<tr>
								<td align='center' valign='top'>
									<br>
									<table border='0' cellpadding='0' cellspacing='0' width='600' id='templateContainer' style='background:#fff; font-family:helvetica; font-size:12px;'>
										<tr>
											<td align='center' valign='top'>
								
												<table border='0' cellpadding='0' cellspacing='0' width='600' id='backgroundCentral'>
													<tr>
														<td class='headerContent'>
															<div style='width:100%; margin: 0 auto; padding-top:20px; text-align:center;'>
																<a href=''>
																	<img src='https://static.miweb.padigital.es/var/m_7/71/712/35665/514766-panaderia-paramesa-banner.jpg' alt='...'>
																</a>
													
															</div>
														</td>
													</tr>
													<tr>
														<td valign='top'>
															<div style='padding:10px;color: #000000;'>
																<div style='text-align:center; width:100%;  border-top: 1px solid #a29c9c;'>
																	<h2 style='color: #000000; '>Gracias por escribirnos, esta es la información que nos proporcionó:</h2>
																</div>
																<div style='text-align:center; font-size:15px;'>
																	
																Nombre: ".$name."<br>
																Correo electrónico: ".$emailTo."<br>
																Asunto: ".$subject."<br>
																Mensaje: ".$msg."<br>

																</div>

																<div style='text-align:center; font-size:10px;'>
																	Nos pondremos en contacto pronto.
																	<br><br>
																</div>


															</div>
														</td>
													</tr>
										
												</table>
								
											</td>
										</tr>
							
									</table>
									<br />
								</td>
							</tr>
						</table>
					</center>
				</body>
			</html>";
    $mail->Body = $message;
    if (!$mail->send()){
        error_log("MAILER: No se pudo enviar el correo!"); die();
    }
    header("Location: http://localhost/ejercicio/correo.php"); 
    die();



} catch(Exception $e){

}


?>