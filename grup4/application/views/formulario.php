<?php 
   include('stilos.php');
?>

<style>
 body{
     
     background-position: center center;



background-repeat: no-repeat;


background-attachment: fixed;


background-size: cover;
    }
  .form-group{
       margin:0 0 0 27%;
       border-radius:1%;
  }

  #img{
    margin:0 0 0 5%;
  }
  #img1{
    margin:0 5% 0 0;
  }



</style>
<br><br>

<div class="container col-sm-7 shadow-lg p-3 mb-5 bg-white rounded">
   
		<h2 class="text-secondary  text-center font-weight-bold">Registro de Personas</h2>
    <br>


   <form method="post"  action="" class="was-validated p-3" > 








        <div class="form-group col-md-6 ">
            <label for="" class="text-primary font-weight-bold ">nombres</label >
            <input type="text" class="form-control" name="nombres" value="" placeholder="nombres" required>

            <div class="valid-feedback"><li class="fa fa-check"></li></div>
            <div class="invalid-feedback"><li class="fa fa-close"></li></div>
        </div>
        


        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="" placeholder="apellidos" required>

            <div class="valid-feedback"><li class="fa fa-check"></li></div>
            <div class="invalid-feedback"><li class="fa fa-close"></li></div>       
        </div>

        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">edad</label>
            <input type="text" class="form-control" name="edad" value="" placeholder="edad" required>
       
            <div class="valid-feedback"><li class="fa fa-check"></li></div>
            <div class="invalid-feedback"><li class="fa fa-close"></li></div>
        </div>
        
        <div class="form-group col-md-6">
            <label for="" class="text-primary font-weight-bold">email</label>
            <input type="email" class="form-control" name="email" value="" placeholder="" required>
            <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">usuario@gmail.com</span>
          </div>
          <div class="valid-feedback"><li class="fa fa-check"></li></div>
          <div class="invalid-feedback"><li class="fa fa-close"></li></div>
        </div>


        <div class="form-group col-md-6" >
            <label for="" class="text-primary font-weight-bold">contraseña</label>
        <input type="password" class="form-control" id=""name="contraseña" value="" placeholder="*****" required>
            <small  class="form-text text-muted">Tu contraseña es personal, no lo campartas!</small>  
            <div class="valid-feedback"><li class="fa fa-check"></li></div>
            <div class="invalid-feedback"><li class="fa fa-close"></li></div>        
        </div>

            <div class="form-group col-md-6">
                  <label  for="direccion" class="text-primary font-weight-bold">direccion</label>

                  <select  required class="custom-select" name="direccion" id="inputGroupSelect02">
                  
                        <option selected >  </option>
                        <option value="Distrito de Ayapata" >Distrito de Ayapata</option>
                        <option value="Distrito de Corani"  >Distrito de Corani</option>
                        <option value="Distrito de Amantani"  >Distrito de Crucero</option>
                        <option value="Distrito de Ollachea" >Distrito de Ollachea</option>
                        <option value="Distrito de Macusani" >Distrito de Macusani</option>
                        <option value="Distrito de Sangaban" >Distrito de Sangaban</option>
                        <option value="Distrito de Usicallos" >Distrito de Usicallos</option>
                        <option value="Distrito de Ituata" >Distrito de Ituata</option>
                        <option value="Distrito de Azangaro" >Distrito de Azangaro</option>
                        <option value="Distrito de Ajoyani" >Distrito de Ajoyani</option>
                        <option value="Distrito de Coasa" >Distrito de Coasa</option>
                        
                  </select>
                  <div class="valid-feedback"><li class="fa fa-check"></li></div>
                  <div class="invalid-feedback"><li class="fa fa-close"></li></div>
            </div>

        <br>
        <div class="text-center">
            <button  type="submit" class="btn btn-primary"> <li class="fa fa-save"> </li>&nbspGuardar</button>
        </div>
        
   </form>

</div>