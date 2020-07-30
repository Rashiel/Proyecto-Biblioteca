<br>
   <div class="row">
    <div class="col-lg-12">           
        <h2 class="text-white">Usuario        
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('usuario/create') ?>"> Create New Product  <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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
          <th>Login</th>
          <th>Password</th>
          <th>Codigo</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Direccion</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>EsAdmin</th>
          
          
      <th>Accion</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>      
      <tr>
        
         <td><?php echo $d->usua_id; ?></td>
          <td><?php echo $d->usua_login; ?></td>
          <td><?php echo $d->usua_password; ?></td>
          <td><?php echo $d->usua_codigo; ?></td>
          <td><?php echo $d->usua_nombres; ?></td>
          <td><?php echo $d->usua_apellidos; ?></td>
          <td><?php echo $d->usua_direccion; ?></td>
          <td><?php echo $d->usua_email; ?></td>
          <td><?php echo $d->usua_telefono; ?></td>
          <td><?php echo $d->usua_esadmin; ?></td>
          
                    
      <td>
      <form method="DELETE" action="<?php echo base_url('usuario/delete/'.$d->usua_id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('usuario/edit/'.$d->usua_id) ?>"><i class='fa fa-pencil' aria-hidden='true'></i></a>
         
          <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o' aria-hidden='true'></i></button>
        </form>
        
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</center>
