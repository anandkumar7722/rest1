<?php
//public
//private
//protected
class Mic{
 
    private $brand;
    public $color;
    public $usb_port;
    public $light;
    public $price;
    public string $Light;
    public string $model;

    public function __construct($brand){
        printf("object created");
        $this->brand=ucwords($brand);
    }
    public function getbrand(){
        return $this->brand;
    }

    public function setLight($Light){

      $this->Light=$Light;
    }
    public function getModel(){
        return $this->model;
    }
    public function setModel($model){
        $this->model=ucwords($model);
    }

}