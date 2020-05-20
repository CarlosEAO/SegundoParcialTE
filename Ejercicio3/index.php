<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/index.css">
    
    <!-------GOOGLE FONTS------------>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">
    <!-------CSS BOOSTRAP------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Pago de Agua Pro</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="row1">
          <div class="col" id="col1">
             <div class="row mb-3">
                 <div class="col">
                     <img src="img/logo.png" alt="">
                 </div>
             </div>
             <form action="reporte.php" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <label for="name">Nombre del Titular</label>
                        <input class="form-control" type="text" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="lastname">Apellidos del Titular</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                       <label for="age">Edad</label>
                       <input class="form-control" type="number" min="1" id="age" name="age" required>
                   </div>
               </div>
                <div class="row">
                   <div class="col">
                       <label for="dom">Domicilio</label>
                       <input class="form-control" type="text" id="dom" name="dom" required>
                   </div>
               </div>
               <div class="row">
                   <div class="col">
                       <label for="contract">Num de contrato</label>
                       <input class="form-control" type="text" id="contract" name="contract" required>
                   </div>
               </div>
                <div class="row">
               <div class="col">
                   <label for="zone">Zona habitacional</label>
                   <select class="form-control" id="zone" name="zone" required>
                       <option selected disabled value="">Elija...</option>
                       <option value="A">A</option>
                       <option value="B">B</option>
                       <option value="C">C</option>
                       <option value="D">D</option>
                       <option value="E">E</option>
                   </select>
               </div>
           </div>
                 <div class="row">
                   <div class="col">
                       <label for="lt">Consumo</label>
                     <input class="form-control" type="number" min="1" aria-describedby="ayuda" id="lt" name="lt" required>
                     <small id="ayuda" class="form-text text-muted">Metros cubicos consumidos</small>
                   </div>
               </div>
               
               <div class="row">
                   <div class="col" id="colbtn">
                       <button type="input" class="btn btn-info">Calcular</button>
                   </div>
               </div>
             </form>
          </div>
        </div>
    </div>

    
        

    <!-------JS BOOSTRAP------------>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>