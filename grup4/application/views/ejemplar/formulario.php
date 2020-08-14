<?php 
   echo form_open('Ejemplar/evalua');
        echo form_label('Nombre:', 'nombre');
        $data_n=array(
          'name'=> 'nombre',
          'class'=> 'form-control',
          'id'=>'nombre'
        );
        echo form_input($data_n,"");

        echo form_label('Resumen:', 'resumen');



        $data_r=array(
            'name'=> 'resumen',
            'class'=> 'form-control',
            'id'=>'resumen'
        );
        echo form_input($data_r,"");

        
        echo form_label('Categoria:', 'cate_id');
        echo form_dropdown('cate_id',$opciones );

        echo form_submit('Guardar','Guardar');


   echo form_close();

?>