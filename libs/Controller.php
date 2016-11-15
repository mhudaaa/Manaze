<?php

class Controller {

    protected $model = [];

    function __construct() {
        //echo 'Main controller<br />';
        Session::init();
        $this->view = new View();
        $this->loadModel('user');
        if (Session::get('id')) {
            $data['info'] = $this->model['user']->getInfo();
            $data['new'] = $this->model['user']->getRequestVIP();
            $this->view->render('menu', $data);
        }
    }
    
    /**
     * 
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {
        
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path)) {
            require $modelPath .$name.'_model.php';
            
            $modelName = $name . '_Model';
            $this->model[$name] = new $modelName();
        }
    }

}