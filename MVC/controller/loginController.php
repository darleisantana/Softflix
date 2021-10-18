<?php

    class LoginControler
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesistemLoader('/MVC/view');
            $twig = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
                'auto_reload' => true,
            ]);
            $template = $twig -> load('inicio.html');
            return $template -> render();
        }

        public function check()
        {
            $_POST;
        }
    }


?>