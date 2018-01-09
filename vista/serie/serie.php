            <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Actor principal</th>
                                <th >Director</th>
                                <th >Temporadas</th>
                                <th >Fecha de estreno</th>
                                <th >Opciones </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php foreach($this->model->Listar() as $r): ?>
                                <tr>
                                    <td><?php echo $r->Nombre; ?></td>
                                    <td><?php echo $r->ActorPrincipal; ?></td>
                                    <td><?php echo $r->Director; ?></td>
                                    <td><?php echo $r->Temporadas; ?></td>
                                    <td><?php echo $r->FechaEstreno; ?></td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="?c=Serie&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                                        <button class="btn btn-warning btn-sm" onclick='ConfirmDelete(<?php echo $r->id; ?>)'>Eliminar</button>
                                    </td>


                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-8">
                                <a href="?c=Serie&a=Crud" class="btn btn-success"><i class="fa fa-edit"></i> Nueva Serie</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

                <script type="text/javascript">
                    function ConfirmDelete($id)
                    {
                        if (confirm("Seguro de eliminar este registro"))
                            location.href='?c=Serie&a=Eliminar&id='+$id;
                    }
                </script>