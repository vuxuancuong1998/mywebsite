<?php 
    class Slider extends Controller 
    {
        private $Slider;
        public function __construct()
        {
            $this->Slider = $this->model("SliderModel", "Admin");
        }
        public function index() {
            $List_Slider = $this->Slider->getSlider();
            $this->view("MasterLayout",[
                "page"=>"Slider",
                "list_slider"=>$List_Slider
            ],"Admin");
            
        }
    }


?>