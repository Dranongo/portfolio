<!--<?php

$erroMSG = "";

if (empty($_POST["name"])) {
	$erroMSG = "Un nom est requis ";
} else {
	$name = $_POST["name"];
}

if (empty($_POST["email"])) {
	$erroMSG .= "Un email est requis ";
} else {
	$email = $_POST["email"];
}

if (empty($_POST["message"])) {
	$erroMSG .= "Un message est nécessaire ";
} else {
	$message = $_POST["message"];
}

$EmailTo = "maximilien.fonteyn@gmail.com";
$Subject = "Nouveau message";

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:" .$email);

if ($success && $erroMSG == ""){
	echo "sucess";
} else {
	if ($erroMSG == ""){
		echo "Une erreur s'est produite ";
	} else {
		echo $erroMSG;
	}
}

?>-->