<?php 
	var_dump($_POST["email"]);

	$ch= curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array(
		"secret"=>"6LfVy-sUAAAAAFwksTgNJF7zt8MxBqFiK2S3TMze",
		"response"=>$_POST["g-recaptcha-response"],
		"remoteip"=>$_SERVER["REMOTE_ADDR"]
	)));

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$retorno=json_decode(curl_exec($ch),true);
	curl_close($ch);
	var_dump($retorno);
?>

		<? if($retorno["success"]===true){ ?> 
		echo "OK " .$_POST["email"];
	<script>
    alert( 'PARABENS! VOCE ESTA TRABALHANDO DE GRAÇA PRO GOOGLE!' );
  	</script>
 <?	}else{ 
		header("Location: index.php");
	}
?>  
 