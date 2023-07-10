<?php

namespace App\Core;

class RedirectResult {
    private $path;

    public function __construct($path) {
        $this->path = $path;
    }

    public function __invoke() {
        header('Location: ' . $this->path);
    }
}