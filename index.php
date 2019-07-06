<?php 


require_once 'vendor/autoload.php';
$tipo="login";
$load="index.twig";
if ($tipo=="login") {
	$load="login.twig";

$params=[


]



}else{
	$load="index.twig";
$params = [


];




}

$loader = new Twig_Loader_Filesystem('./views');
$twig = new \Twig\Environment($loader);

echo $twig->render($load, compact('params'))

 ?>