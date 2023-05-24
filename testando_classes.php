<?php
require __DIR__ . "/source/autoload.php";

//Autoloader carrega automaticamente
$usuario = new \Source\Interp\Usuario("Kazuha");
$usuarioQueSeraDestruido = new \Source\Interp\Usuario("Aether");

$usuarioQueSeraDestruido = null; //destruicao

echo "\n Intervalo \n";

$apotheosis = new \Source\Interp\Manga();
$apotheosis->handler("Apotheosis", 14, 1080);
$apotheosis->rate = 4.5; //A propriedade rate nao existe e desse jeito seria criada

var_dump($apotheosis);


?>