<?php
namespace controllers;

class IndexController
{
    public function actionIndex()
    {
        $content = 'Hello May';
        require '../views/index/index.php';
    }
}