<div class="row">
    <div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Detalle ficha postulante</h3>
            <hr>
        </div>
            <div class="box-body">
              <!-- Date -->
                <?php
                    echo form_hidden('id_postulacion', $id_postulacion);
                    echo form_error('id_postulacion');

                    echo "<div class='form-group'>";
                    echo form_label('Rut','rut');
                    echo '<br>';
                    echo form_label($rut);
                    echo form_error('rut');
                    echo "</div>";

                    echo "<div class='form-group'>";
                    echo form_label('Nombre','nombre');
                    echo '<br>';
                    echo form_label($nombre);
                    echo form_error('nombre');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Apellido Paterno','apellido_paterno');
                    echo '<br>';
                    echo form_label($apellido_paterno);
                    echo form_error('apellido_paterno');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Apellido Materno','apellido_Materno');
                    echo '<br>';
                    echo form_label($apellido_materno);
                    echo form_error('apellido_materno');
                    echo "</div>";
            
            echo form_label('Fecha Nacimiento','fecha_nacimiento');
            echo '<br>';
            echo form_label($fecha_nacimiento);
            echo form_error('fecha_nacimiento');echo '<br>';
            
                    echo "<div class='form-group'>";
                    echo form_label('Genero','sexo');
                echo '<br>';
                    echo form_label($sexo);
                    echo form_error('sexo');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Telefono','telefono');
                    echo "<div class='input-group'>";
                    echo "<div class='input-group-addon'>";
                    echo "<i class='fa fa-phone'></i>";
                    echo "</div>";
                    echo '<br>';
                    echo form_label($telefono);
                    echo form_error('telefono');
                    echo "</div>";
               
                    echo "<div class='form-group'>";
                    echo form_label('Email','email');
                    echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-envelope'></i></span>";
                    echo '<br>';
                    echo form_label($email);
                    echo form_error('email');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Direccion','direccion');
                    echo '<br>';
                    echo form_label($direccion);
                    echo form_error('direccion');
                    echo "</div>";
            
                    echo "<div class='form-group'>";
                    echo form_label('Comuna');
                    echo '<br>';
                    echo form_label($comuna);
                    echo form_error('comuna');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Educacion','educacion');
                    echo '<br>';
                    echo form_label($educacion);
                    echo form_error('educacion');
                    echo "</div>";
            
                    echo form_label('Experiencia','anos_experiencia');
                    echo '<br>';
                    echo form_label($anos_experiencia);
                    echo form_error('anos_experiencia');echo '<br>';
            
                    echo "<div class='form-group'>";
                    echo form_label('Modalidad','modalidad');
                    echo '<br>';
                    echo form_label($modalidad);
                    echo form_error('modalidad');
                    echo "</div>";
                    
                    $options = array('JAVA' => 'Java','.NET' => '.net','PHP' => 'Php');
                    echo "<div class='form-group'>";
                    echo form_label('Curso','curso');
                    echo '<br>';
                    echo form_label($curso);
                    echo form_error('curso');
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Id Solicitud','id_solicitud');
                    echo '<br>';
                    echo form_label($id_solicitud);
                    echo form_error('id_solicitud');echo "</div>";
            
                    

            echo anchor('welcome','Menú principal');
            if(isset($mensaje)){
                echo $mensaje;
            }
        ?>
        </div>
    </div>
</div>
