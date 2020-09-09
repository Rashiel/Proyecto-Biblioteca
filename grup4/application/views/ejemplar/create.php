  <br>
  <form method="post" action="<?php echo base_url('ejemplarCreate');?>">
    <div class="card pull-right" style="width: 18rem;">
  <img src="https://as1.ftcdn.net/jpg/02/36/44/18/500_F_236441805_QgeXGKNIvNC6FYiqECaUMeje1pT9rOp8.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes ingresar tus datos.</p>
  </div>
</div>
<h2 align="center" class="display-4"><P><u><strong>REGISTRAR UN NUEVO LIBRO</strong></u></P></h2>

 <div class="container">
<?php 
   echo form_open('Ejemplar/listar');
        $data_n=array(
          'id'=>'ejem_titulo',
          'name'=> 'ejem_titulo',
          'class'=> 'form-control',
          'placeholder'=>'Titulo',
        );
        echo form_label('Titulo:','ejem_titulo');
        echo form_input($data_n,"");
        echo '<td><font color="red">'.form_error('ejem_titulo').'</font></td>';

        $data_e=array(
          'id'=>'ejem_editorial',
          'name'=> 'ejem_editorial',
          'class'=> 'form-control',
          'placeholder'=>'Editorial',
        );
          echo form_label('Editorial:','ejem_editorial');
          echo form_input($data_e,"");
          echo '<td><font color="red">'.form_error('ejem_editorial').'</font></td>';

        $data_p=array(
          'id'=>'ejem_paginas',
          'name'=> 'ejem_paginas',
          'class'=> 'form-control',
          'placeholder'=>'Paginas',
        );
          echo form_label('Paginas:','ejem_paginas');
          echo form_input($data_p,"");
          echo '<td><font color="red">'.form_error('ejem_paginas').'</font></td>';

          $data_is=array(
            'id'=>'ejem_isbn',
            'name'=> 'ejem_isbn',
            'class'=> 'form-control',
            'placeholder'=>'Isbn',
          );
           echo form_label('Isbn:','ejem_isbn');
           echo form_input($data_is,"");
           echo '<td><font color="red">'.form_error('ejem_isbn').'</font></td>';

        $data_i=array(
          'id'=>'ejem_idioma',
          'name'=> 'ejem_idioma',
          'class'=> 'form-control',
          'placeholder'=>'Idioma',
        );
         echo form_label('Idioma:','ejem_idioma');
         echo form_input($data_i,"");
         echo '<td><font color="red">'.form_error('ejem_idioma').'</font></td>';

        $data_po=array(
          'id'=>'ejem_portada',
          'name'=> 'ejem_portada',
          'class'=> 'form-control',
          'placeholder'=>'Portada',
        );
         echo form_label('Portada:','ejem_portada');
         echo form_input($data_po,"");
         echo '<td><font color="red">'.form_error('ejem_portada').'</font></td>';

        $data_d=array(
          'id'=>'ejem_digital',
          'name'=> 'ejem_digital',
          'class'=> 'form-control',
          'placeholder'=>'Disponible/No Disponible',
        );
         echo form_label('Digital:','ejem_digital');
         echo form_input($data_d,"");
         echo '<td><font color="red">'.form_error('ejem_digital').'</font></td>';

        $data_a=array(
          'id'=>'ejem_audio',
          'name'=> 'ejem_audio',
          'class'=> 'form-control',
          'placeholder'=>'Disponible/No Disponible',
        );
         echo form_label('Audio:','ejem_audio');
         echo form_input($data_a,"");
         echo '<td><font color="red">'.form_error('ejem_audio').'</font></td>';

        $data_r=array(
          'id'=>'ejem_resumen',
          'name'=> 'ejem_resumen',
          'class'=> 'form-control',
          'placeholder'=>'Resumen',
        );
         echo form_label('Resumen:','ejem_resumen');
         echo form_input($data_r,"");
         echo '<td><font color="red">'.form_error('ejem_resumen').'</font></td>';

        $data_t=array(
          'id'=>'ejem_tipo_id',
          'name'=> 'ejem_tipo_id',
          'class'=> 'form-control',
          'placeholder'=>'Tipo'
        );
         echo form_label('Tipo:','ejem_tipo_id');
         echo form_input($data_t,"");
         echo '<td><font color="red">'.form_error('ejem_tipo_id').'</font></td>';


        $data_v=array(
          'id'=>'ejem_valoracion',
          'name'=> 'ejem_valoracion',
          'class'=> 'form-control',
          'placeholder'=>'Valoración',
        );
         echo form_label('Valoracion:','ejem_valoracion');
         echo form_input($data_v,"");
         echo '<td><font color="red">'.form_error('ejem_valoracion').'</font></td>';


        $data_an=array(
          'id'=>'ajem_anio',
          'name'=> 'ejem_anio',
          'class'=> 'form-control',
          'placeholder'=>'Año',
        );
         echo form_label('Año:','ejem_anio');
         echo form_input($data_an,"");
         echo '<td><font color="red">'.form_error('ejem_anio').'</font></td>';

         $data_pr=array(
          'id'=>'ejem_nprestamos',
          'name'=> 'ejem_nprestamos',
          'class'=> 'form-control',
          'placeholder'=>'Idioma',
        );
         echo form_label('Prestamos:','ejem_nprestamos');
         echo form_input($data_pr,"");
         echo '<td><font color="red">'.form_error('ejem_nprestamos').'</font></td>';


         echo form_label('Categoria:','categoria');

         $rows = $this->db->query('SELECT * FROM categoria')->result();
         $opciones = array();
                     foreach($rows as $row){
                           $opciones[$row->cate_id]=$row->cate_nombre;
                     }
         
         echo form_dropdown('ejem_cate_id',$opciones);
 
?>

<br>
   <input type="submit" value="Guardar" class="btn btn-primary">
   <?php echo form_close();  ?>

</div>
      
   
</form>