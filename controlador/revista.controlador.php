<?php

require_once 'modelo/Revista.php';

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
        $alm = new Revista();

        if (isset($_REQUEST['codigo'])) {
            $alm = $this->model->Obtener($_REQUEST['codigo']);
        }

        require_once 'vista/header.php';
        require_once 'vista/serie/serie-editar.php';
        require_once 'vista/footer.php';
    }

    public function Guardar() {
        $alm = new Revista();

        $alm->codigo = $_REQUEST['codigo'];
        $alm->titulo = $_REQUEST['titulo'];
        $alm->lugar = $_REQUEST['lugar'];
        $alm->autor = $_REQUEST['autor'];
        $alm->fechaingreso = $_REQUEST['fechaingreso'];
        $alm->numpaginas = $_REQUEST['numpaginas'];
        $alm->pais = $_REQUEST['pais'];
        $alm->numero = $_REQUEST['numero'];
        $alm->volumen = $_REQUEST['volumen'];
        $alm->fechaedicion = $_REQUEST['fechaEdicion'];
        $alm->temas = $_REQUEST['temas'];
        $alm->secciones = $_REQUEST['secciones'];

        $alm->id > 0 ? $this->model->Actualizar($alm) : $this->model->Registrar($alm);

        header('Location: index.php');
    }

    public function Eliminar() {
        $this->model->Eliminar($_REQUEST['codigo']);
        header('Location: index.php');
    }

}
