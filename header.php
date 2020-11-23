<html>
<!-- OPEN PHP FORM-->
<?php
if($_POST) { //IF THEY ARE DATA
    $to = "alfonso.juarezkelly@gmail.com";
    $visitor_name = ""; 
    $visitor_email = "";
    $email_title = "Información Portafolio";
    $visitor_message = "";
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
    if(isset($_POST['visitor_message'])) {
        $visitor_message = filter_var($_POST['visitor_message'] , FILTER_SANITIZE_STRING);
    }
    $message = "Informes sobre la página web Portafolio \r\n"
    . 'Nombre: ' . $visitor_name . "\r\n"
    . 'Email: ' . $visitor_email . "\r\n"
    . 'Mensaje: ' . $visitor_message . "\r\n";
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n"
    . 'X-Mailer: PHP/' . phpversion();
    if(mail($to, $email_title, $message, $headers)) {
		echo '<script type="text/javascript">
    alert("Thank you for contacting me. You will get a reply within 24 hours.");
    window.location.href="index.php";
    </script>';
    } else {
		echo'<script type="text/javascript">
    alert("We are sorry but the email did not go through.");
    window.location.href="index.php";
    </script>';
    }
}
?>
<!--ERROR MESSAGE FORM PHP-->
<?php
  $name_error = $email_error = $message_error = "";
  $visitor_name = $visitor_email = $visitor_message = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["visitor_name"])) {
      $visitor_name_error = "Required";
    } else {
      $visitor_name = proc_input($_POST["fullname"]);
    }
    if (empty($_POST["visitor_email"])) {
        $visitor_email_error = "Required";
    } else {
        $visitor_email = proc_input($_POST["email"]);
    }
    if (empty($_POST["visitor_message"])){
        $visitor_message_error = "Required";
    }else{
        $visitor_message = proc_input($_POST["message"]);
    }
}
?>
<head>
	<title>Alfonso JK</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css" />
</head>
<body>
	
	