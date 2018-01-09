<div class="row">

<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <ol class="breadcrumb">

                <li>
                    <i class="fa fa-edit"></i>  <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?>
                </li>

            </ol>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <form id="form1" action="?c=Serie&a=Guardar" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />

                <div class="form-group">
                    <label for="nomb">Nombres</label>
                    <input value="<?php echo $alm->Nombre; ?>" required type="text" name="Nombre" class="form-control" id="nomb" placeholder="Ingrese el Nombre de la Serie">
                </div>

                <div class="form-group">
                    <label for="nomb">Actor Principal</label>
                    <input type="text" name="ActorPrincipal" value="<?php echo $alm->ActorPrincipal; ?>" class="form-control" placeholder="Ingrese el Actor Principal" data-validacion-tipo="requerido|min:8" />

                </div>


                <div class="form-group">
                    <label for="direc">Director</label>
                    <input type="text" name="Director" value="<?php echo $alm->Director; ?>" class="form-control" placeholder="Ingrese el Director de la Serie" data-validacion-tipo="requerido|min:8" />

                </div>

                <div class="form-group">
                    <label>Temporadas</label>
                    <select name="Temporadas" class="form-control">
                        <option <?php echo $alm->Temporadas == 1 ? 'selected' : ''; ?> value="1">Una</option>
                        <option <?php echo $alm->Temporadas == 2 ? 'selected' : ''; ?> value="2">Dos</option>
                        <option <?php echo $alm->Temporadas == 3 ? 'selected' : ''; ?> value="3">Tres</option>
                        <option <?php echo $alm->Temporadas == 4 ? 'selected' : ''; ?> value="4">Cuatro</option>
                        <option <?php echo $alm->Temporadas == 5 ? 'selected' : ''; ?> value="5">Cinco</option>
                        <option <?php echo $alm->Temporadas == 6 ? 'selected' : ''; ?> value="6">Seis</option>
                        <option <?php echo $alm->Temporadas == 7 ? 'selected' : ''; ?> value="7">Siete</option>
                        <option <?php echo $alm->Temporadas == 8 ? 'selected' : ''; ?> value="8">Ocho</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Fecha de estreno</label>
                    <input type="date" name="FechaEstreno" value="<?php echo $alm->FechaEstreno; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de nacimiento" data-validacion-tipo="requerido" />

                    <hr />
                </div>

                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>

</div>
