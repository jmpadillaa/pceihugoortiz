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

    public function index($search = '', $page = 1) {
        if (!$this->isAuthenticated()) {
            return $this->redirect('/account/login');
        }

        $pageSize = 10;
        $offset = ($page - 1) * $pageSize;

        $model = $this->repo->listar($search, $pageSize, $offset);
        $model['page'] = $page;
        $model['totalPages'] = ceil($model['count'] / $pageSize);
        $model['search'] = $search;

        return $this->view('registro/index', model: $model);
    }

    public function form($id = 0) {
        if (!$this->isAuthenticated()) {
            return $this->redirect('/account/login');
        }

        if ($id == 0) {
            $a = new Aspirante();
            $a->representante = new Representante();
            $a->ubicacion = new Ubicacion();
        } else {
            $a = $this->repo->obtenerAspirante($id);
        }

        if ($this->isPost()) {
            $this->mapModel($a, $_POST);

            if ($a->id == 0) {
                $a->fechaRegistro = date(DateTimeInterface::ISO8601, time());
            }

            $this->mapModel($a->representante, $_POST['representante']);

            $this->mapModel($a->ubicacion, $_POST['ubicacion']);

            $this->repo->guardarAspirante($a);

            return $this->redirect('/registro');
        }
        
        return $this->view('registro/form', $a);
    }

    public function delete($id) {
        if (!$this->isAuthenticated()) {
            return $this->redirect('/account/login');
        }

        if ($this->isPost()) {
            $this->repo->eliminarAspirante($id);

            $this->successMsg('El registro fue eliminado');
        }

        return $this->redirect('/registro');
    }

    public function print($id) {
        if (!$this->isAuthenticated()) {
            return $this->redirect('/account/login');
        }

        $a = $this->repo->obtenerAspirante($id);

        return $this->view('registro/print', $a, '');
    }

    private function mapModel($model, array $source) {
        $reflection = new ReflectionClass($model);

        $props = $reflection->getProperties();

        foreach ($props as $property) {
            $name = $property->name;

            if ($property->hasType()) {
                $type = $property->getType();

                if ($type->getName() == 'object') {
                    continue;
                }
            }            

            if (isset($source[$name])) {
                $model->$name = htmlspecialchars($source[$name]);
            } else if (!$property->isInitialized($model) && $property->hasDefaultValue()) {
                $model->$name = $property->getDefaultValue();
            }
        }
    }
}