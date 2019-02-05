<?php

if(isset($_SESSION['param1']) && isset($_SESSION['param1'])){
	if($_SESSION['param1'] != ""){
		echo 'seu nome é '. $_SESSION['param1'] . " " . $_SESSION['param2'];
	}else{
		echo 'faltou enviar o nome';
	}
}
