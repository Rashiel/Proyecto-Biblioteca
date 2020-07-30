<br>
   <form method="post" action="<?php echo base_url('usuario/update/'.$usuar->usua_id);?>">
     <div class="card pull-right" style="width: 18rem;">
  <img src="https://us.123rf.com/450wm/vladwel/vladwel1709/vladwel170900015/85353942-ilustraci%C3%B3n-de-datos-personales-.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes volver a ingresar tus datos y corregir datos erroneos.</p>
  </div>
</div>
      <div class="form-group">
       <div class="col-md-4 mb-3">
                
            
                <label class="text-white col-md-3">Login:</label>
                <input type="text" name="usua_login" class="form-control" value="<?php echo $usuar->usua_login; ?>">
            
                <label class="text-white col-md-3">Password:</label>
                <input type="password" name="usua_password" class="form-control" value="<?php echo $usuar->usua_password; ?>">
                                
        
                <label class="text-white col-md-3">Codigo:</label>
                <input type="text" name="usua_codigo" class="form-control" value="<?php echo $usuar->usua_codigo; ?>">
            
         
                <label class="text-white col-md-3">Nombres:</label>
                <input type="text" name="usua_nombres" class="form-control" value="<?php echo $usuar->usua_nombres; ?>">
          
      
                <label class="text-white col-md-3">Apellidos:</label>
                <input type="text" name="usua_apellidos" class="form-control" value="<?php echo $usuar->usua_apellidos; ?>">
                
                <label class="text-white col-md-3">Direccion:</label>
                <input type="text" name="usua_direccion" class="form-control" value="<?php echo $usuar->usua_direccion; ?>"> 
            
        
                <label class="text-white col-md-3">Email:</label>
                <input type="text" name="usua_email" class="form-control" value="<?php echo $usuar->usua_email; ?>">
            
        
                <label class="text-white col-md-3">Telefono:</label>
                <input type="text" name="usua_telefono" class="form-control" value="<?php echo $usuar->usua_telefono; ?>">
            
         
                <label class="text-white col-md-3">Esadmin:</label>
                <input type="text" name="usua_esadmin" class="form-control" value="<?php echo $usuar->usua_esadmin; ?>"> 
                  
                    
                
        </div>
       </div>         
                        
        <div class="col-md-8 col-md-offset-2 pull-left">
        <input type="submit" name="Save" class="btn btn-success">
        </div>

   
</form>