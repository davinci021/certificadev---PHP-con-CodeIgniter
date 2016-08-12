        
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
        <?php
            echo form_open('certificatev_controller/checkearLogin', 'class="form-horizontal"');
            echo '<div class="box-body">';
                echo form_label('Rut','rut','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    
                    echo '<div class="col-sm-10">';
                    echo form_input('rut', null, 'class="form-control" id="inputEmail3" placeholder="Sin puntos ni guión"');
                    echo '</div>';
                    echo form_error('rut');
                echo '</div>';
            
                echo form_label('Clave','clave','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_password('clave', null, 'class="form-control" id="inputPassword3" placeholder="Password"');
                    echo '</div>';
                    echo form_error('clave');
                echo '</div>';    
            
                echo '<div class="box-footer">';
                echo form_reset('btn-cancelar','Cancelar', 'class="btn btn-default"');
                echo form_submit('btn-login', 'Login', 'class="btn btn-info pull-right"');
                echo '</div>';
            echo '</div>';
            echo form_close();
        ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar</h3>
            </div>
                <?php
            echo form_open('certificatev_controller/agregarUser', 'class="form-horizontal"');
            echo '<div class="box-body">';
                echo form_label('Rut','rut','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_input('rut', null, 'class="form-control" placeholder="Sin puntos ni guión"');
                    echo '</div>';
                    echo form_error('rut');
                echo '</div>';
                echo form_label('Nombre','nombre','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_input('nombre', null, 'class="form-control" placeholder="Nombre"');
                    echo '</div>';
                    echo form_error('nombre');
                echo '</div>';
                echo form_label('Apellido Paterno','apellido_paterno','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_input('apellido_paterno', null, 'class="form-control" placeholder="Apellido Paterno"');
                    echo '</div>';
                    echo form_error('apellido_paterno');
                echo '</div>';
                echo form_label('Apellido Materno','apellido_materno','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_input('apellido_materno', null, 'class="form-control" placeholder="Apellido Materno"');
                    echo '</div>';
                    echo form_error('apellido_materno');
                echo '</div>';
                echo form_label('Clave','clave','class="col-sm-2 control-label"');
                echo '<div class="form-group">';
                    echo '<div class="col-sm-10">';
                    echo form_input('clave', null, 'class="form-control" placeholder="Sin puntos ni guión"');
                    echo '</div>';
                    echo form_error('clave');
                echo '</div>';
                  
            
                echo '<div class="box-footer">';
                echo form_reset('btn-cancelar','Cancelar', 'class="btn btn-default"');
                echo form_submit('btn-registrar', 'Registrar', 'class="btn btn-info pull-right"');
                echo '</div>';
                
            echo '</div>';
            echo form_close();
        ?>
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br><br><br>