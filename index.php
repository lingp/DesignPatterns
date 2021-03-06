<?php
// 统一入口，用作各个模式的实例测试

define('ROOT', __DIR__);

require_once ROOT . DIRECTORY_SEPARATOR . 'Tools' . DIRECTORY_SEPARATOR .  'Loader.php';
spl_autoload_register("Loader::autoload");

////抽象工厂模式
//$jsonObj = new \Creational\AbstractFactory\JsonFactory();
//$htmObj = new \Creational\AbstractFactory\HtmlFactory();
//
//$jText = $jsonObj->createText('抽象工厂模式');
//$hText = $htmObj->createText("抽象工厂模式");
//var_dump($jText->render());
//var_dump($hText->render());
//
////建造者模式
//$directorObj = new \Creational\Builder\Director();
//$carObj = $directorObj->build(new \Creational\Builder\CarBuilder());
//$bikeObj = $directorObj->build(new \Creational\Builder\BikeBuilder());
//var_export($carObj);
//var_export($bikeObj);
//
//
//$factory = [
//    new \Creational\FactoryMethod\ItalianFactory(),
//    new \Creational\FactoryMethod\GermanFactory()
//];
//
//foreach ($factory as $v)
//{
//    $obj = $v->create(\Creational\FactoryMethod\FactoryMethod::FAST);
//    $obj->setColor("green");
//}
//
//echo "<br> ======================================== <br>";
//
//$pool = new \Creational\Pool\Pool('\Creational\Pool\Tests\TestWorker');
//$worker = $pool->get();
//echo $worker->id . "<br>";
//
//$worker->id = 5;
//$pool->dispose($worker);
//
//echo $pool->get()->id . "<br>";
//
//$simple_factory = new \Creational\SimpleFactory\ConcreteFactory();
//$vehicle_obj = $simple_factory->createVehicle('bicycle');
//$vehicle_obj->driveTo('world');
//
//$singleton1 = \Creational\Singleton\Singleton::getInstance();
//$singleton2 = \Creational\Singleton\Singleton::getInstance();
//
//
//var_export($singleton1 == $singleton2);

//$book = new \Structural\Adapter\Book();
//$ebook = new \Structural\Adapter\EBookAdapter(new \Structural\Adapter\Kindle());
//
//$book->open();
//$ebook->open();


//$car_obj = new \Structural\Bridge\Car(new \Structural\Bridge\Produce(), new \Structural\Bridge\Assemble());
//$motor_obj = new \Structural\Bridge\Motorcycle(new \Structural\Bridge\Produce(), new \Structural\Bridge\Assemble());
//
//$car_obj->manufacture();
//$motor_obj->manufacture();

$form = new \Structural\Composite\Form();
$form->addElement(new \Structural\Composite\TextElement());
$form->addElement(new \Structural\Composite\InputElement());

$form2 = new \Structural\Composite\Form();
$form2->addElement(new \Structural\Composite\TextElement());
$form2->addElement(new \Structural\Composite\InputElement());

$form->addElement($form2);

echo $form->render();























