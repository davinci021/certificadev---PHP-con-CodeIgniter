<div class="row">
    <div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Formulario de Solicitud</h3>
            <hr>
        </div>
            <div class="box-body">
              <!-- Date -->
                <?php
                    echo form_open('certificatev_controller/agregar');
                    
                    echo form_hidden('id_postulacion', 'default');
                    echo '<span class="help-block">';
                    echo form_error('id_postulacion');
                    echo '</span>';
                    
                    echo "<div class='form-group'>";
                    echo form_label('Rut','rut');
                    echo form_input('rut', null, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('rut');
                    echo '</span>';
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Nombre','nombre');
                    echo form_input('nombre', null, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('nombre');
                    echo '</span>';
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Apellido Paterno','apellido_paterno');
                    echo form_input('apellido_paterno', null, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('apellido_paterno');
                    echo '</span>';
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Apellido Materno','apellido_Materno');
                    echo form_input('apellido_materno', null, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('apellido_materno');
                    echo '</span>';
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Fecha Nacimiento','fecha_nacimiento');
                    echo "<div class='input-group date'>";
                    echo "<div class='input-group-addon'>";
                    echo "<i class='fa fa-calendar'></i></div>";
                    echo form_input('fecha_nacimiento', null, "id='datepicker' class='form-control pull-right'" );
                    echo '<span class="help-block">';
                    echo form_error('fecha_nacimiento');
                    echo '</span>';
                    echo "</div></div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Genero','sexo');
                    echo "<br>Masculino";
                    echo form_radio('sexo', 'Masculino', 'checked', "class='flat-red'");
                    echo "Femenino";
                    echo form_radio('sexo', 'Femenino', '', "class='flat-red'");
                    echo '<span class="help-block">';
                    echo form_error('sexo');
                    echo '</span>';
                    echo "</div>";
                    
                    echo "<div class='form-group'>";
                    echo form_label('Telefono','telefono');
                    echo "<div class='input-group'>";
                    echo "<div class='input-group-addon'>";
                    echo "<i class='fa fa-phone'></i>";
                    echo "</div>";
                    echo form_input('telefono', null, "class='form-control'");
                    echo "</div>";
                    echo '<span class="help-block">';
                    echo form_error('telefono');
                    echo '</span>';
                    
               
                    echo "<div class='form-group'>";
                    echo form_label('Email','email');
                    echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-envelope'></i></span>";
                    echo form_input('email', null,"class='form-control' placeholder='Example@email.com'");
                    echo "</div>";
                    echo '<span class="help-block">';
                    echo form_error('email');
                    echo '</span>';
                    
                    echo "<div class='form-group'>";
                    echo form_label('Direccion','direccion');
                    echo form_input('direccion', null, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('direccion');
                    echo '</span>';
                    echo "</div>";
                    
                    $option = array(
                            'MELIPILLA' => 'Melipilla',
                            'MARIA_PINTO' => 'Maria Pinto',
                            'TALAGANTE' => 'Talagante',
                            'PADRE HURTADO' => 'Padre Hurtado',
                            'PUENTE ALTO' => 'Puente Alto',
                            'ALHUE' => 'Alhue',
                            'SAN BERNARDO' => 'San Bernardo',
                            'SAN MIGUEL' => 'San Miguel',
                            'LAS CONDES' => 'Las Condes',
                            'VITACURA' => 'Vitacura',
                            'CERRILLOS' => 'Cerrillos',
                            'MALLOCO' => 'Malloco',
                            'CERRO NAVIA' => 'Cerro Navia',
                            'CONCHALI' => 'Conchali',
                            'EL BOSQUE' => 'El Bosque',
                            'ESTACION CENTRAL' => 'Estacion Central',
                            'HUECHURABA' => 'Huechuraba',
                            'INDEPENDENCIA' => 'Independencia',
                            'LA CISTERNA' => 'La Cisterna',
                            'LA FLORIDA' => 'La Florida',
                            'LA PINTANA' => 'La pintana',
                            'LA GRANJA' => 'La granja',
                            'LA REINA' => 'La Reina',
                            'LO BARNECHEA' => 'Lo Barnechea',
                            'LO PRADO' => 'Lo Prado',
                            'MACUL' => 'Macul',
                            'ÑUÑOA' => 'Ñuñoa',
                            'PEDRO AGUIRRE CERDA' => 'Pedro Aguirre Cerda',
                            'PEÑALOLEN' => 'Peñalolen',
                            'PROVIDENCIA' => 'Providencia',
                            'PUDAHUEL' => 'Pudahuel',
                            'QUILICURA' => 'Quilicura',
                            'QUINTA NORMAL' => 'Quinta Normal',
                            'RECOLETA' => 'Recoleta',
                            'RENCA' => 'Renca',
                            'SAN JOAQUIN' => 'San Joaquin',
                            'SAN RAMON' => 'San Ramon',
                            'SANTIAGO' => 'Santiago',
                            'VITACURA' => 'Vitacura',
                            'PIRQUE' => 'Pirque',
                            'SAN JOSE DE MAIPO' => 'San Jose De Maipo',
                            'SAN_ANTONIO' => 'San Antonio',
                            'MAIPU' => 'Maipu',
                            'LO_ESPEJO' => 'Lo Espejo');
                    $selecte = array('MELIPILLA', 'melipilla');
                    echo "<div class='form-group'>";
                    echo form_label('Comuna');
                    echo form_dropdown('comuna', $option, $selecte, "class='form-control select2' style='width: 100%; multiple='none' '");
                    echo '<span class="help-block">';
                    echo form_error('comuna');
                    echo '</span>';
                    echo "</div>";
                    
                    $op = array('Profesional' => 'Profesional',
                        'Tecnica' => 'Tecnica',
                        'Media' => 'Media',
                        'Basica' => 'Basica',
                        'No Posee' => 'No Posee');
                    $se = array('No Posee' => 'No Posee');
                    echo "<div class='form-group'>";
                    echo form_label('Educacion','educacion');
                    echo form_dropdown('educacion', $op, $se, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('educacion');
                    echo '</span>';
                    echo "</div>";
                    
                    $opti = array('0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                        '7' => '7',
                        '8' => '8',
                        '9' => '9',
                        '10' => '10');
                    $sele = array('0' => '0');
                    echo "<div class='form-group'>";
                    echo form_label('Años experiencia','anos_experiencia');
                    echo form_dropdown('anos_experiencia', $opti, $sele, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('anos_experiencia');
                    echo '</span>';
                    echo "</div>";
                    
                    
                    
                    
                    $opt = array('DIURNA' => 'Diurna','VESPERTINA' => 'Vespertina');
                    $sel = array('DIURNA' => 'Diurna');
                    echo "<div class='form-group'>";
                    echo form_label('Modalidad','modalidad');
                    echo form_dropdown('modalidad', $opt, $sel, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('modalidad');
                    echo '</span>';
                    echo "</div>";
                    
                    $options = array('JAVA' => 'Java','.NET' => '.net','PHP' => 'Php');
                    $selected = array('JAVA', 'Java');
                    echo "<div class='form-group'>";
                    echo form_label('Curso','curso');
                    echo form_dropdown('curso', $options, $selected, "class='form-control'");
                    echo '<span class="help-block">';
                    echo form_error('curso');
                    echo '</span>';
                    echo "</div>";
                    
                    echo form_hidden('id_solicitud',1);
                    echo '<span class="help-block">';
                    echo form_error('id_solicitud');
                    
                    echo '<div class="box-footer">';
                    echo form_submit('btn-agregar', 'Enviar', 'class="btn btn-primary"');
                    echo '</div>';
                    echo form_close();
                    echo anchor('welcome','Menú principal');
                    if(isset($mensaje)){
                        echo $mensaje;
                    }
            echo "</div>";
                ?>  
        </div>
    </div>
</div>
