<?php
namespace App\Controllers;
class IndexController extends BaseController {
    public function IndexAction() {
        $data = array('message'=>'Hola mundo');
        $this->renderHTML('../views/index_view.php',$data);
    }

    public function SaludoAction() {
        $url = $_SERVER['REQUEST_URI'];
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', rtrim($path, '/'));
        $nombre = end($segments);
        $nombre = explode('/',$_SERVER['REQUEST_URI'])[7];
        $data = array('message'=>'Saludos...' . $nombre);
        $this->renderHTML('../views/saludo_view.php',$data);
    }

    public function NumerosAction() {
        $numeros = array(2,4,6,8,10,12,14,16,18,20);
        $data = array('message'=> $numeros);
        $this->renderHTML('../views/numeros_view.php',$data);
    }

    public function NumerosAction1() {
        $url = $_SERVER['REQUEST_URI'];
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', rtrim($path, '/'));
        $numero = end($segments);
        $numero = explode('/',$_SERVER['REQUEST_URI'])[7];
        $numeros = array();
        $counter = 0;
        for ($i=1; $counter<$numero; $i++) {
            if ($i%2==0) {
                array_push($numeros,$i);
                $counter++;
            }
        }
        $data = array('message'=> $numeros);
        $this->renderHTML('../views/numeros_view.php',$data);
    }
}

?>