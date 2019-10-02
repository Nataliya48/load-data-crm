<?php

require_once '../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_GET['action']) {
        case "load" :
            $file = new LoadFile($_FILES['file']);
            require_once("../src/template/selectOption.php");
            break;
        case "connect" :
            require_once("../src/template/mapping.php");
            break;
        case "mapping" :
            require_once("../src/template/result.php");
            break;
        case "start":
            require_once('../src/template/loadFile.php');
            break;
        default :
            require_once("../src/template/notFound.php");
            break;
    }
} else {
    require_once('../src/template/loadFile.php');
}