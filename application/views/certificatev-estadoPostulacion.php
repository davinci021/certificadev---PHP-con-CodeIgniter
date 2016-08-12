<?php 
    echo form_open('certificatev_controller/verestado');
    echo form_label('Rut', 'rut');
    echo form_input('rut');
    echo form_error('rut');
    echo form_submit('btn-buscar', 'Buscar');
    echo form_close();
    
    if(isset($dato)){
        foreach ($dato->result() as $fila) {
            if($fila->id_solicitud==1){
                echo "<td>Pendiente</td>";
            }  else if($fila->id_solicitud==2) {
                echo "<td>Aprobado</td>";
            } else {
                echo "<td>Reprobado</td>";
            }
        }
    }
?>
