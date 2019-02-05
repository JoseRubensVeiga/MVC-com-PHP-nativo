<?php

class GetRoutes{
	
	private $routes = '';
	private $explode = '';

	public function __construct(){
		$this->get();
		$this->getUrl();
		$this->makeParams($this->explode);
		$this->makeView($this->routes, $this->explode);
	}

	public function getUrl(){
		$this->explode = explode('/', str_replace('/urlAmigavel/', '', $_SERVER['REQUEST_URI']));
	}


	public function get(){
		require 'Routes.php';
		$this->routes = routes();

	}

	public function makeView($rota, $url){

		if(isset($rota[$url[0]])){
			if(file_exists('views/' . $rota[$url[0]] . ".php"))
				require "views/" . $rota[$url[0]] . ".php";
			else
				require "views/errors/404.php";
		}else{
			require "views/errors/505.php";
		}
	}

	public function makeParams($url){

		$view = $url[0];
		unset($url[0]);


		for($i = 0; $i < count($url); $i ++){
			$_SESSION['param' . ($i+1)] = $url[$i+1];
		}
	}
}
