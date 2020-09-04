<?php
class App {
	protected $folder = "Main";
	protected $controller = "Home";
	protected $action = "index";
	protected $params = [];
	# array ( 0 => folder, 1 => controller, 2 => action, 3 => params)
	function __construct() {
		$arr = $this->UrlProcess();
		// kt folder
		if (isset($arr[0])) {
			if (file_exists('./watch/'.$arr[0].'')) {
				$this->folder = $arr[0];
			
			if ($this->folder == "Admin") {
				$this->controller = "Dashboard";
			}
			unset($arr[0]);
			}

			
		}

		// xử lí controller
		if (isset($arr[1]) && (file_exists("./watch/Main/Controllers/" . $arr[1] . ".php") || file_exists("./watch/Admin/Controllers/" . $arr[1] . ".php"))) {
			$this->controller = $arr[1];
		}
		unset($arr[1]);
		require_once "./watch/" . $this->folder . "/Controllers/" . $this->controller . ".php";
		$this->controller = new $this->controller;

		//xử lí action
		if (isset($arr[2])) {
			if (method_exists($this->controller, $arr[2])) {
				$this->action = $arr[2];
			}
			unset($arr[2]);
		}
		// Xử lý params
		$this->params = $arr ? array_values($arr) : [];

		call_user_func_array([$this->controller, $this->action], $this->params);
	}
	function UrlProcess() {
		if (isset($_GET["url"])) {
			return explode("/", filter_var(trim($_GET["url"], "/")));

		}

	}

}

?>