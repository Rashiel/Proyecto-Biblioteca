 <br>
  <form method="post" action="<?php echo base_url('usuarioCreate');?>">
    <div class="card pull-right" style="width: 18rem;">
  <img src="https://as1.ftcdn.net/jpg/02/36/44/18/500_F_236441805_QgeXGKNIvNC6FYiqECaUMeje1pT9rOp8.jpg?ver=6" class="card-img-top" >
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes ingresar tus datos.</p>
  </div>
</div>
      
      <div class="form-group">
       <div class="col-md-4 mb-3">
                    
        
                <label class="text-white col-md-3">Login:</label>
                <input type="text" name="usua_login" class="form-control">
            
                <label class="text-white col-md-3">Password:</label>
                <input type="password" name="usua_password" class="form-control">
                                
        
                <label class="text-white col-md-3">Codigo:</label>
                <input type="text" name="usua_codigo" class="form-control">
            
         
                <label class="text-white col-md-3">Nombres:</label>
                <input type="text" name="usua_nombres" class="form-control">
          
      
                <label class="text-white col-md-3">Apellidos:</label>
                <input type="text" name="usua_apellidos" class="form-control">
                
                <label class="text-white col-md-3">Direccion:</label>
                <input type="text" name="usua_direccion" class="form-control"> 
            
        
                <label class="text-white col-md-3">Email:</label>
                <input type="text" name="usua_email" class="form-control">
            
        
                <label class="text-white col-md-3">Telefono:</label>
                <input type="text" name="usua_telefono" class="form-control">
            
         
                <label class="text-white col-md-3">Esadmin:</label>
                <input type="text" name="usua_esadmin" class="form-control">
          
          
    
       </div>
    </div>    
          
        <div class="col-md-8 col-md-offset-2 pull-left">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    </div>
    
</form>