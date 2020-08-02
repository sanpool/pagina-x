<?php 
if (isset($_POST["enviar "])) {
	if (!empty($_POST["name"])&& !empty($_POST["email"])&& !empty($_POST["Message"])) {
		$name=$_POST["name"];
		$email=$_POST["email"];
		$Message=$_POST["Message"];
		$header="from: Cnrfpetshop@gmail.com". "/r/n";
		$header.="reply-to:Cnrfpetshop@gmail.com". "/r/n";
		$header.="X-mailer: php/".phpversion();
		$email= @mail($email,$Message,$header);
	    if ($mail) {

	    	echo "<h4>¡enviado existosamente!</h4>";
	    }
}