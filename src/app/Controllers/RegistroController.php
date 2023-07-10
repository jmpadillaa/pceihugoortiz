<?php

namespace App\Controllers;

use App\Models\Aspirante;
use App\Models\Representante;
use App\Models\Ubicacion;

use App\Data\RegistroRepository;

use DateTimeInterface;
use ReflectionClass;

class RegistroController extends BaseController {
    private $repo;

    public function __construct() {
        $this->repo = new RegistroRepository();
    }

    public function index() {
        if (!empty($_POST)) {
            date_default_timezone_set('America/Guayaquil');

            $a = new Aspirante();
            $a->fechaRegistro = date(DateTimeInterface::ISO8601, time());
            $this->mapModel($a, $_POST);

            $r = new Representante();
            $this->mapModel($r, $_POST['representante']);

            $u = new Ubicacion();
            $this->mapModel($u, $_POST['ubicacion']);

            $this->repo->guardar($a, $r, $u);

            return $this->redirect('/');
        }
        
        return $this->view('registro/index');
    }

    private function mapModel($model, array $source) {
        $reflection = new ReflectionClass($model);

        $props = $reflection->getProperties();

        foreach ($props as $property) {
            $name = $property->name;

            if (isset($source[$name])) {
                $value = htmlspecialchars($source[$name]);    
                
                switch ($property->class) {
                    case 'boolean':
                        $model->$name = $value == 'on' || $value == 'true';
                        break;
                    default:
                        $model->$name = $value;
                }
            } else if (!$property->isInitialized($model) && $property->hasDefaultValue()) {
                $model->$name = $property->getDefaultValue();
            }
        }
    }
}