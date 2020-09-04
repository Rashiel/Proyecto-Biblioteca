  <br>
  <form method="post" action="<?php echo base_url('ejemplarCreate');?>">
    <div class="card pull-right" style="width: 18rem;">
  <img src="https://as1.ftcdn.net/jpg/02/36/44/18/500_F_236441805_QgeXGKNIvNC6FYiqECaUMeje1pT9rOp8.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes ingresar tus datos.</p>
  </div>
</div>
      
      <form id="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
      <div class="form-group">
       <div class="col-md-4 mb-3">
                    
        
                <label for="ejem_titulo" class="text-whites col-md-3">Titulo:</label>
                <input type="text" name="ejem_titulo" id="ejem_titulo" class="form-control"  value="" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>
           <div class="col-md-4 mb-3">    
                <label for="ejem_editorial" class="text-whites col-md-3">Editorial:</label>
                <input type="text" name="ejem_editorial" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>                
          <div class="col-md-4 mb-3">
                <label for="ejem_paginas" class="text-whites col-md-3">Paginas:</label>
                <input type="text" name="ejem_paginas" class="form-control" required>
                 <div class="valid-feedback">¡Ok válido!</div>
                 <div class="invalid-feedback">Complete el campo.</div>
         </div>
         <div class="col-md-4 mb-3">        
                <label for="ejem_isbn" class="text-whites col-md-3">ISBN:</label>
                <input type="text" name="ejem_isbn" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>
          <div class="col-md-4 mb-3">       
                <label for="ejem_idioma" class="text-whites col-md-3">Idioma:</label>
                <input type="text" name="ejem_idioma" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>
          <div class="col-md-4 mb-3">                
                <label for="ejem_portada" class="text-whites col-md-3">Portada:</label>
                <input type="text" name="ejem_portada" class="form-control" required> 
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>
          <div class="col-md-4 mb-3">        
                <label for="ejem_digital" class="text-whites col-md-3">Digital:</label>
                <input type="text" name="ejem_digital" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
          </div>
          <div class="col-md-4 mb-3">       
                <label for="ejem_audio" class="text-whites col-md-3">Audio:</label>
                <input type="text" name="ejem_audio" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
         </div>
         <div class="col-md-4 mb-3">        
                <label for="ejem_resumen" class="text-whites col-md-3">Resumen</label>
                <input type="text" name="ejem_resumen" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
         </div>       
         <div class="col-md-4 mb-3"> 
                <label for="ejem_valoracion" class="text-whites col-md-3">Valoracion:</label>
                <input type="text" name="ejem_valoracion" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
        </div>
        <div class="col-md-4 mb-3">         
                <label for="ejem_anio" class="text-whites col-md-3">Año:</label>
                <input type="text" name="ejem_anio" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
        </div>
        <div class="col-md-4 mb-3">  
                <label for="ejem_nprestamos" class="text-whites col-md-3">Prestamos:</label>
                <input type="text" name="ejem_nprestamos" class="form-control" required>
                <div class="valid-feedback">¡Ok válido!</div>
                <div class="invalid-feedback">Complete el campo.</div>
        </div>
          
    
       </div>
        
          
        <div class="col-md-8 col-md-offset-2 pull-left">
            <input type="submit" name="Save" class="btn btn-success">
        </div>
    
</form>
    
</form>