<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

  <div class="container">

     <div class="row header">
       <div class="col"> Formulario de Logueo</div>
     </div>

     <div class="row">

       <div class="col-1 col-sm-2 col-lg-4" > </div>

       <div class="col-10 col-sm-8 col-lg-4 padding sombra" style="background-color:white;">
         <form action="loginProceso.php" method="post">

             <div class="form-group">
               <label for="usuario" >Ingresa tu usuario</label>
               <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required>
             </div>

             <div class="form-group">
               <label for="password1">Password</label>
               <input type="password" class="form-control" id="password1" name="password1" placeholder="Ingresa tu contraseña" required>
             </div>

             <button type="submit" class="btn btn-primary">Submit</button>

         </form>
       </div>

       <div class="col-1 col-sm-2 col-lg-4"> </div>

     </div>



  </div>

  </body>

</html>
