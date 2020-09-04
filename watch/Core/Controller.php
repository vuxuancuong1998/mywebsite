<?php
class Controller {
	public function model($model, $folder = "Main") {
		require_once "./watch/" . $folder . "/Models/" . $model . ".php";
		return new $model;
	}
	public function view($view, $data = [], $folder = "Main") {

		require_once "./watch/" . $folder . "/Views/" . $view . ".php";
	}
	// public function classes($class, $folder){
	// 	require_once "./watch/".$folder."/Class/".$class. ".php";
	// 	return new $class;
	// }
	public function uploadImage($images){
		$flag = 1;
		if ($images != NULL && $flag==1)
		{
			$upload = $this->model("UploadModel");
			$upload->setFileExtension('gif|jpg|png');
			$upload->setFileSize(1000);
			$dir = '../../public/img/product/';
			$upload->setUploadDir($dir);
			if($upload->isVail()==true){ 
				$flag = 0;
				$error = $upload->error;
			}
			if($flag){
				$images = $upload->upload(false,'images');
			}
		}
		return $images;
	}
} //
?>