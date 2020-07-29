<br>
   <div class="row">
    <div class="col-lg-12">           
        <h2 class="text-white">Ejemplares         
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('ejemplar/create') ?>"> Create New Product  <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            </div>
        </h2>
     </div>
</div>
<br>
<center>
<table class="table table-hover table-striped table-dark ">
  <thead class"thead-dark">
      <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Editorial</th>
          <th>Paginas</th>
          <th>ISBN</th>
          <th>Idioma</th>
          <th>Portada</th>
          <th>Digital</th>
          <th>Audio</th>
          <th>Resumen</th>
          <th>Tipo ID</th>
          <th>Categoria ID</th>
          <th>Valoracion</th>
          <th>Año</th>
          <th>Prestamos</th>
          
          
      <th>Action</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
         <td><?php echo $d->ejem_id; ?></td>
          <td><?php echo $d->ejem_titulo; ?></td>
          <td><?php echo $d->ejem_editorial; ?></td>
          <td><?php echo $d->ejem_paginas; ?></td>
          <td><?php echo $d->ejem_isbn; ?></td>
          <td><?php echo $d->ejem_idioma; ?></td>
          <td><?php echo $d->ejem_portada; ?></td>
          <td><?php echo $d->ejem_digital; ?></td>
          <td><?php echo $d->ejem_audio; ?></td>
          <td><?php echo $d->ejem_resumen; ?></td>
          <td><?php echo $d->ejem_tipo_id; ?></td>
          <td><?php echo $d->ejem_cate_id; ?></td>
          <td><?php echo $d->ejem_valoracion; ?></td>
          <td><?php echo $d->ejem_anio; ?></td>
          <td><?php echo $d->ejem_nprestamos; ?></td>
                    
      <td>
       <form method="DELETE" action="<?php echo base_url('ejemplar/delete/'.$d->id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('ejemplar/edit/'.$d->id) ?>"><i class='fa fa-pencil' aria-hidden='true'></i></a>
         
          <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o' aria-hidden='true'></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</center>
