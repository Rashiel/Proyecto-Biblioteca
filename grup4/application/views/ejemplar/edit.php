<br>
   <form method="post" action="<?php echo base_url('ejemplar/update/'.$ejemp->id);?>">
     <div class="card pull-right" style="width: 18rem;">
  <img src="https://us.123rf.com/450wm/vladwel/vladwel1709/vladwel170900015/85353942-ilustraci%C3%B3n-de-datos-personales-.jpg?ver=6" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">En estos formularios tu puedes volver a ingresar tus datos y corregir datos erroneos.</p>
  </div>
</div>
      <div class="form-group">
       <div class="col-md-4 mb-3">
                
                      <label class="text-white col-md-3">Titulo:</label>
                <input type="text" name="ejem_titulo" class="form-control" value="<?php echo $ejemp->ejem_titulo; ?>">
            
                <label class="text-white col-md-3">Editorial:</label>
                <input type="text" name="ejem_editorial" class="form-control" value="<?php echo $ejemp->ejem_editorial; ?>">
                                
        
                <label class="text-white col-md-3">Paginas:</label>
                <input type="text" name="ejem_paginas" class="form-control" value="<?php echo $ejemp->ejem_paginas; ?>">
            
         
                <label class="text-white col-md-3">ISBN:</label>
                <input type="text" name="ejem_isbn" class="form-control" value="<?php echo $ejemp->ejem_isbn; ?>">
          
      
                <label class="text-white col-md-3">Idioma:</label>
                <input type="text" name="ejem_idioma" class="form-control" value="<?php echo $ejemp->ejem_idioma; ?>">
                
                <label class="text-white col-md-3">Portada:</label>
                <input type="text" name="ejem_portada" class="form-control" value="<?php echo $ejemp->ejem_portada; ?>"> 
            
        
                <label class="text-white col-md-3">Digital:</label>
                <input type="text" name="ejem_digital" class="form-control" value="<?php echo $ejemp->ejem_digital; ?>">
            
        
                <label class="text-white col-md-3">Audio:</label>
                <input type="text" name="ejem_audio" class="form-control" value="<?php echo $ejemp->ejem_audio; ?>">
            
         
                <label class="text-white col-md-3">Resumen:</label>
                <input type="text" name="ejem_resumen" class="form-control" value="<?php echo $ejemp->ejem_resumen; ?>">
          
            
                <label class="text-black col-md-3">Valoracion:</label>
                <input type="text" name="ejem_valoracion" class="form-control" value="<?php echo $ejemp->ejem_valoracion; ?>">
            
        
                <label class="text-black col-md-3">Año:</label>
                <input type="text" name="ejem_anio" class="form-control" value="<?php echo $ejemp->ejem_anio; ?>">
            
         
                <label class="text-black col-md-3">Prestamos:</label>
                <input type="text" name="ejem_nprestamos" class="form-control" value="<?php echo $ejemp->ejem_nprestamos; ?>"> 
                  
                    
                
        </div>
       </div>         
                        
        <div class="col-md-8 col-md-offset-2 pull-left">
        <input type="submit" name="Save" class="btn btn-success">
        </div>

   
</form>