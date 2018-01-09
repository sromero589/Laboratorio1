<?php
class Serie
{
	private $mysqli;
    
    public $id;
    public $Nombre;
    public $ActorPrincipal;
    public $Director;
    public $Temporadas;
    public $FechaRegistro;
    public $FechaEstreno;
    

	public function __CONSTRUCT()
	{
		try
		{
			$this->mysqli = BasedeDatos::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
            $query = "SELECT * FROM SERIES";
            $arr=[];

            if ($resultado = $this->mysqli->query($query)) {

                /* obtener el array de objetos */
                while ($obj = $resultado->fetch_object()) {
                    array_push($arr,$obj);
                }

                $resultado->close();
                return $arr;
            }
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			foreach ($this->Listar() as $obj)
			    if($obj->id==$id)
			        return $obj;

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{

            $stmt=$this->mysqli->prepare("DELETE FROM series WHERE id = ?");
            $stmt->bind_param('i',$id);
             $stmt->execute();
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE series SET 
						Nombre          = ?, 
						ActorPrincipal        = ?,
                        Director = ?,
                        Temporadas        = ?,
                        FechaEstreno = ? 
				    WHERE id = ?";


            $stmt=$this->mysqli->prepare($sql);
            $stmt->bind_param(
                'sssssi',
                    $data->Nombre,
                    $data->ActorPrincipal,
                    $data->Director,
                    $data->Temporadas,
                    $data->FechaEstreno,
                    $data->id
            );
             $stmt->execute();

		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Serie $data)
	{
		try 
		{
		$sql = "INSERT INTO series (Nombre,ActorPrincipal,Director,Temporadas,FechaEstreno,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?)";
            $stmt=$this->mysqli->prepare($sql);
            $stmt->bind_param(
                'ssssss',
                    $data->Nombre,
                    $data->ActorPrincipal,
                    $data->Director,
                    $data->Temporadas,
                    $data->FechaEstreno,
                    $data->FechaEstreno

            );
             $stmt->execute();


		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}