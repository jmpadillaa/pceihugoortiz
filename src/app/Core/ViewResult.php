<?php

namespace App\Core;

class ViewResult {
    private string $viewPath;

    private string $title;

    private string $layout;

    private $model;

    public function __construct(string $viewPath, string $layout, $model) {
        $this->viewPath = $viewPath;
        $this->layout = $layout;
        $this->model = $model;
        $this->title = '';

        $this->viewPath = 'views/' . $viewPath . '.php';

        if ($layout) {
            $this->layout = 'views/' . $layout . '.php';
        }
    }

    public function __invoke() {    
        $model = $this->model;
        
        if ($this->layout) {
            ob_start();
            
            require $this->viewPath;

            $responseBody = ob_get_contents();

            ob_get_clean();

            $pageTitle = $this->title;

            require $this->layout;
        } else {
            require $this->viewPath;
        }
    }

    private function setTitle($title) {
        $this->title = $title;
    }
}