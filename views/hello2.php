<?php 

echo 'Minha segunda view';

if(isset($_SERVER['teste2']))
	echo $_SERVER['teste2'];
else
	echo 'não';