<?php

    class core 
    {
        private $url;
        private $controller;
        private $method;
        private $params =  array();

        public function __constuct()
        {

        }

        public function start($request)
        {
            if(isset ($request['url'])) {
                $this -> url = explode('/' $request['url']);
                $this -> controller = $this -> url[0].'controller';
                array_shift($this -> url);
                $this -> method = $this -> url[0];
                array_shift($this -> url);
                $this -> params = $this -> url;
            } else {
                $this -> controller = 'loginController';
                $this -> method = 'index'
            }
            call_user_func(array(new $this -> controller, $this -> method), $this -> params);
        }
    }

?>