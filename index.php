<?php
// 统一入口，用作各个模式的实例测试

define('ROOT', __DIR__);

require_once ROOT . DIRECTORY_SEPARATOR . 'Tools' . DIRECTORY_SEPARATOR .  'Loader.php';
spl_autoload_register("Loader::autoload");

//抽象工厂模式
$jsonObj = new \Creational\AbstractFactory\JsonFactory();
$htmObj = new \Creational\AbstractFactory\HtmlFactory();

$jText = $jsonObj->createText('抽象工厂模式');
$hText = $htmObj->createText("抽象工厂模式");
var_dump($jText->render());
var_dump($hText->render());