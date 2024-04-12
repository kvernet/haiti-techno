<?php

namespace app\core\controller;

class Controller {

    private $baseDir = APP_PUBLIC_DIR . "view/";

    public function _404() : void {
        $this->view($this->baseDir . "error/_404.php");
        die();
    }

    protected function view(string $page, array $params=[]) : void {
        require_once($page);
    }
}