<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">        
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Postulaciones</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rut</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Curso</th>
                  <th>Estado</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dato->result() as $fila) {
                            echo "<tr>"
                            . "<td>".$fila->rut."</td>"
                            . "<td>".$fila->nombre." "
                            . " ".$fila->apellido_paterno.""
                            . " ".$fila->apellido_materno."</td>"
                            . "<td>".$fila->email."</td>"
                            . "<td>".$fila->curso."</td>";
                                if($fila->id_solicitud==1){
                                    echo "<td>Pendiente</td>";
                                }  else if($fila->id_solicitud==2) {
                                    echo "<td>Aprobado</td>";
                                }  else {
                                    echo "<td>Reprobado</td>";
                                }
                                echo "<td>";
                                echo form_open('certificatev_controller/eliminar');
                                echo form_hidden("id_postulacion",$fila->id_postulacion);
                                echo form_submit('btn-eliminar', 'Eliminar',"class='btn btn-danger'");
                                echo form_close();
                                echo "</td>";

                                echo "<td>";
                                echo form_open('certificatev_controller/reenviar');
                                echo form_hidden('id_postulacion',$fila->id_postulacion);
                                echo form_hidden('rut',$fila->rut);
                                echo form_hidden('nombre',$fila->nombre);
                                echo form_hidden('apellido_paterno',$fila->apellido_paterno);
                                echo form_hidden('apellido_materno',$fila->apellido_materno);
                                echo form_hidden('fecha_nacimiento',$fila->fecha_nacimiento);
                                echo form_hidden('sexo',$fila->sexo);
                                echo form_hidden('telefono',$fila->telefono);
                                echo form_hidden('email',$fila->email);
                                echo form_hidden('direccion',$fila->direccion);
                                echo form_hidden('comuna',$fila->comuna);
                                echo form_hidden('educacion',$fila->educacion);
                                echo form_hidden('anos_experiencia',$fila->anos_experiencia);
                                echo form_hidden('modalidad',$fila->modalidad);
                                echo form_hidden('curso',$fila->curso);
                                echo form_hidden('id_solicitud',$fila->id_solicitud);

                                echo form_submit('btn_modificar', 'Modificar', "class='btn btn-block btn-primary'");
                                echo form_close();
                                echo "</td>";
                                echo "<td>";
                                echo form_open('certificatev_controller/ver');
                                echo form_hidden('id_postulacion',$fila->id_postulacion);
                                echo form_hidden('rut',$fila->rut);
                                echo form_hidden('nombre',$fila->nombre);
                                echo form_hidden('apellido_paterno',$fila->apellido_paterno);
                                echo form_hidden('apellido_materno',$fila->apellido_materno);
                                echo form_hidden('fecha_nacimiento',$fila->fecha_nacimiento);
                                echo form_hidden('sexo',$fila->sexo);
                                echo form_hidden('telefono',$fila->telefono);
                                echo form_hidden('email',$fila->email);
                                echo form_hidden('direccion',$fila->direccion);
                                echo form_hidden('comuna',$fila->comuna);
                                echo form_hidden('educacion',$fila->educacion);
                                echo form_hidden('anos_experiencia',$fila->anos_experiencia);
                                echo form_hidden('modalidad',$fila->modalidad);
                                echo form_hidden('curso',$fila->curso);
                                echo form_hidden('id_solicitud',$fila->id_solicitud);

                                echo form_submit('btn-ver', 'Ver', "class='btn btn-block btn-primary'");
                                echo form_close();
                                echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Rut</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Curso</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
            
        
