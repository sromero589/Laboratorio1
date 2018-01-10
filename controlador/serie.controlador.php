<?php

require_once 'modelo/serie.php';

class SerieControlador {

    private $model;

    public function __CONSTRUCT() {
        $this->model = new Serie();
    }

    public function Index() {
        require_once 'vista/header.php';
        require_once 'vista/serie/serie.php';
        require_once 'vista/footer.php';
    }

    public function Crud() {
        $alm = new Serie();

        if (isset($_REQUEST['id'])) {
            $alm = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'vista/header.php';
        require_once 'vista/serie/serie-editar.php';
        require_once 'vista/footer.php';
    }

    public function Guardar() {
        $alm = new Serie();

        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->ActorPrincipal = $_REQUEST['ActorPrincipal'];
        $alm->Director = $_REQUEST['Director'];
        $alm->Temporadas = $_REQUEST['Temporadas'];
        $alm->FechaEstreno = $_REQUEST['FechaEstreno'];

        $alm->id > 0 ? $this->model->Actualizar($alm) : $this->model->Registrar($alm);

        header('Location: index.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }

}
