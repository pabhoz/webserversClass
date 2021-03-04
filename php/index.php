<?php

$url = ( filter_input(INPUT_GET,"url") != null) ? filter_input(INPUT_GET,"url") : "Index/";
$url = explode('/', filter_var( rtrim($url, '/') , FILTER_SANITIZE_URL));

$controller = ucfirst($url[0])."Controller";
$method = $url[1];
$params = $url[2];

// echo "El controlador es: $controller, el método es $method y el parámetro es $params";

if (class_exists($controller)) {
    $controller = new $controller();
    if(method_exists($controller,$method)){
        if(isset($params)){
            $controller->{$method}($params);
        }else{
            $controller->{$method}();
        }
    } else {
        echo ucfirst($url[0])." no dispone de la acción $method";
    }
} else {
    echo "Recurso ".ucfirst($url[0])." no encontrado";
}


Class ZapatosController {

    public $items;

    function __construct()
    {
        $this->items = ["33"=> [
            new Zapato("Ropa Cara", "Gucci"),
        ], "44" => [
            new Zapato("Luis Buitron", "Rojo"),
            new Zapato("Prada", "Leopardo"),
        ]];
    }

    
    public function tallas($talla){
        $content = isset($this->items[$talla]) ? $this->items[$talla] : "No tenemos zapatos de esa talla";
        if(is_array($content)){
            echo "<ul>";
            foreach ($content as $key => $zapato) {
                echo "<li>$zapato->model - $zapato->color</li>";
            }
            echo "</ul>";
        } else {
            echo $content;
        }
    }
}

Class Zapato {
    public $model;
    public $color;

    function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color; 
    }
}
