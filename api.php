<?php
    set_time_limit(0);

	if($_SERVER["REQUEST_METHOD"] !== "POST") {
		exit("Invalid Method");
    }

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->Host = 'example.com';
    $mail->SMTPDebug = false;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'mail@example.com';
    $mail->Password = '***';
    $mail->Port = 465;

    $mail->setFrom('contato@aionabsoluto.com.br', 'Contato aionabsoluto.com.br');
    $mail->addAddress('contato@aionabsoluto.com.br', 'Contato AION Absoluto');
        
    $mail->isHTML(true);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://ipinfo.io/".$_SERVER["REMOTE_ADDR"]."/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);

	if(isset($_GET["action"]) && $_GET["action"] == "download") {
        if(
            isset($_POST["name"]) && $_POST["name"] != "" &&
            isset($_POST["phone"]) && $_POST["phone"] != "" &&
            isset($_POST["email"]) && $_POST["email"] != ""
	    ) {
            $connection = new mysqli("host", "user", "pass", "dbName");

            $stmt = $connection->prepare("
                INSERT INTO access(id_access, project, name, email, phone, data, date) 
                VALUES(NULL, 'AION Absoluto', ?, ?, ?, ?, NOW())
            ");
            $stmt->bind_param("ssss", $_POST["name"], $_POST["phone"], $_POST["email"], $server_output);
            $stmt->execute();
            $connection->close();

            $mensagem = "<strong>Nome</strong>: " . $_POST["name"] . "\n"
                ."<strong>Email</strong>: " . $_POST["email"] . "\n"
                ."<strong>Telefone</strong>: " . $_POST["phone"] . "\n"
                ."<strong>Origem</strong>: $server_output \n";

            $mail->Subject = "Download aionabsoluto.com.br";
            $mail->Body    = nl2br($mensagem);
            $mail->AltBody = nl2br(strip_tags($mensagem));
            if(!$mail->send()) {
                exit("Algum erro ocorreu. O arquivo não foi enviado! Entre em contato com o suporte");
            }

            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename='Aion.pdf'");
            header("Content-Type: application/octet-stream");
            header("Content-Transfer-Encoding: binary");
            header("Content-Length: ".filesize("Aion.pdf"));
            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header("Pragma: public");
            header("Expires: 0");
            readfile("Aion.pdf");
        } else {
            exit("Preencha os dados nome, telefone e email!");
        }
	} else if(isset($_GET["action"]) && $_GET["action"] == "contact") {
		if(
            isset($_POST["name"]) && $_POST["name"] != "" &&
            isset($_POST["email"]) && $_POST["email"] != "" &&
            isset($_POST["message"]) && $_POST["message"] != ""
        ) {
            $phone = isset($_POST["phone"]) && $_POST["phone"] != "" ? $_POST["phone"] : "Não informado.";

            $mensagem = "<strong>Nome</strong>: " . $_POST["name"] . "\n"
                        ."<strong>Email</strong>: " . $_POST["email"] . "\n"
                        ."<strong>Telefone</strong>: " . $phone . "\n"
                        ."<strong>Origem</strong>: $server_output \n"
                        ."<strong>Menssagem</strong>:\n" . $_POST["message"];

            $mail->Subject = "Contato aionabsoluto.com.br";
            $mail->Body    = nl2br($mensagem);
            $mail->AltBody = nl2br(strip_tags($mensagem));
            if(!$mail->send()) {
                exit("Algum erro ocorreu. Sua mensagem não foi enviada! Entre em contato com o suporte");
            } else {
                exit("Sua mensagem foi enviada, entraremos em contato em breve!");
            }
        } else {
            exit("Preencha os dados nome, email e mensagem!");
        }
    }
?>
