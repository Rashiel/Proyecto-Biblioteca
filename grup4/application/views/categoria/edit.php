<br>
   <form method="post" action="<?php echo base_url('categoria/update/'.$categ->cate_id);?>">
     <div class="card pull-right" style="width: 18rem;">
  <img src="https://us.123rf.com/450wm/vladwel/vladwel1709/vladwel170900015/85353942-ilustraci%C3%B3n-de-datos-personales-.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes volver a ingresar tus datos y corregir datos erroneos.</p>
  </div>
</div>
      <div class="form-group">
       <div class="col-md-4 mb-3">
                
                                
                <label class="text-white col-md-3">Nombre:</label>
                <input type="text" name="cate_nombre" class="form-control" value="<?php echo $categ->cate_nombre; ?>">
                  
                    
                
        </div>
       </div>         
                        
        <div class="col-md-8 col-md-offset-2 pull-left">
        <input type="submit" name="Save" class="btn btn-success">
        </div>

   
</form>