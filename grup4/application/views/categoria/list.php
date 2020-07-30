<br>
   <div class="row">
    <div class="col-lg-12">           
        <h2 class="text-white">Categoria 
                  
            <div class="pull-right">
               <a class="btn btn-primary" href="<?php echo base_url('categoria/create') ?>"> Create New Product  <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
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
          <th>Nombre</th>
          
          
          
      <th>Accion</th>
      </tr>
  </thead>
  <tbody>
   <?php foreach ($data as $d) { ?>     
      <tr>
        
         <td><?php echo $d->cate_id; ?></td>
          <td><?php echo $d->cate_nombre; ?></td>
       
          
                    
      <td>
      <form method="DELETE" action="<?php echo base_url('categoria/delete/'.$d->cate_id);?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('categoria/edit/'.$d->cate_id) ?>"><i class='fa fa-pencil' aria-hidden='true'></i></a>
         
          <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-trash-o' aria-hidden='true'></i></button>
        </form>
        
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</center>