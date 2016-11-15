<?php

class View {

    function __construct() {
        //echo 'this is the view';
    }

    public function render($name, $data = []){
        extract($data);    
        require 'views/' . $name . '.php';
    }

}