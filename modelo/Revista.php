<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Revista
 *
 * @author casa
 */
class Revista extends Documento
{

    //put your code here
    private $volumen;
    private $fechaEdicion;
    private $temas;
    private $secciones;

    public function __CONSTRUCT()
    {
        try {
            $this->mysqli = BasedeDatos::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $query = "SELECT d.codigo, d.titulo, d.lugar, d.autor, d.fechaingreso,
            d.numpaginas, d.pais, d.numero, r.volumen,r.fechaEdicion, r.temas, r.secciones
            FROM documento d INNER JOIN revista r
            ON d.codigo = r.codigo";
            $arr = [];

            if ($resultado = $this->mysqli->query($query)) {

                /* obtener el array de objetos */
                while ($obj = $resultado->fetch_object()) {
                    array_push($arr, $obj);
                }

                $resultado->close();
                return $arr;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            foreach ($this->Listar() as $obj) {
                if ($obj->id == $id) {
                    return $obj;
                }
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {

            $stmt = $this->mysqli->prepare("DELETE FROM revista WHERE codigo = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();

            $stmt = $this->mysqli->prepare("DELETE FROM documento WHERE codigo = ?");
            $stmt->bind_param('i', $id);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE documento SET
						titulo          = ?,
						lugar        = ?,
                        autor = ?,
                        fechaingreso        = ?,
                        numpaginas = ?,
                        pais = ?
                        numero = ?
				    WHERE codigo = ?";

            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param(
                $data->titulo, $data->lugar, $data->autor, $data->fechaingreso,
                $data->numpaginas, $data->pais, $data->numero, $data->codigo
            );
            $stmt->execute();

            $sql = "UPDATE revista SET
            volumen          = ?,
            fechaEdicion        = ?,
            temas = ?,
            secciones        = ?,
        WHERE codigo = ?";

            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param(
                $data->volumen, $data->fechaEdicion, $data->temas, $data->escciones, $data->codigo
            );
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Serie $data)
    {
        try {
            $sql = "INSERT INTO documento
		        VALUES (?, ?, ?, ?, ?, ?,?,?)";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param(
                $data->codigo, $data->titulo, $data->lugar, $data->autor,
                $data->fechaingreso, $data->numpaginas, $data->pais, $data->numero
            );
            $stmt->execute();

            $sql = "INSERT INTO revista
            VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->mysqli->prepare($sql);
            $stmt->bind_param(
                $data->codigo, $data->volumen, $data->fechaEdicion, $data->temas, $data->escciones
            );
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getTemas()
    {
        return $this->temas;
    }

    public function getSecciones()
    {
        return $this->secciones;
    }

    public function setTemas($temas)
    {
        $this->temas = $temas;
    }

    public function setSecciones($secciones)
    {
        $this->secciones = $secciones;
    }

    public function getVolumen()
    {
        return $this->volumen;
    }

    public function getFechaEdicion()
    {
        return $this->fechaEdicion;
    }

    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;
    }

    public function setFechaEdicion($fechaEdicion)
    {
        $this->fechaEdicion = $fechaEdicion;
    }

}
