<?php
  extract($_POST);

  $prom_fin = (($grade1+$grade2+$grade3+$grade4+$grade5));

  $prom = (($prom_fin/5));
  
  $prom_fin = round($prom);

  if($prom_fin>=6){
    $status = "Aprobado";
  }
  else{
    $status = "Reprobado";
  }

      //////////////////////////////////////////
    // CONEXION DB
    //////////////////////////////////////////

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ExamenParcial2";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO ejercicio2 (nom, apps, grado,grupo,cal_1,cal_2,cal_3,cal_4,cal_5, prom_fin,`status`)
        VALUES ('$name', '$lastname', '$grade', '$group', '$grade1', '$grade2', '$grade3', '$grade4', '$grade5', '$prom_fin', '$status')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/reporte.css">
    
    <!-------GOOGLE FONTS------------>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <!-------CSS BOOSTRAP------------>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Creador de Reportes Pro</title>
</head>
<body>
<div class="container-fluid my-2" id="cf1">
      
       <div class="row">
           <div class="col">
               <h3>Reporte de Calificaciones</h3>
           </div>
       </div>
   </div>
<div class="container-fluid">
   <table class="table">
      <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Grado</th>
              <th scope="col">Grupo</th>
            </tr>
          </thead>
       <tbody>
           <tr>
               <td id="">161231</td>
               <td id=""><?php echo $name." ".$lastname;?></td>
               <td id="grade"><?php echo $grade;?></td>
               <td id="group"><?php echo $group;?></td>
           </tr>
       </tbody>
        
   </table>
       <table class="table table-hover" id="tabla2">
          <thead class="thead-dark">
            <tr>
              <th >Calificaciones</th>
              <th ></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Calificacion 1</th>
              <td id="grade1"><?php echo $grade1; ?></td>

            </tr>
            <tr>
              <th scope="row">Calificacion 2</th>
              <td id="grade2"><?php echo $grade2 ?></td>
            </tr>
            <tr>
              <th scope="row">Calificacion 3</th>
              <td id="grade3"><?php echo $grade3; ?></td>
            </tr>
            <tr>
               <th scope="row">Calificacion 4</th>
                <td id="grade4"><?php echo $grade4; ?></td>
            </tr>
            <tr>
               <th scope="row">Calificacion 5</th>
                <td id="grade5"><?php echo $grade5; ?></td>
            </tr>
            <tr class="table-secondary">
                <th  scope="row">Promedio</th>
                <td  id="prom"><?php echo $prom; ?></td>
            </tr>
            <tr class="table-secondary">
                <th  scope="row">Promedio Final</th>
                <td  id="prom_fin"><?php echo $prom_fin; ?></td>
            </tr>
            <tr class="table-secondary">
                <th scope="row">Status</th>
                <td id="status" style="color:red"><?php echo $status; ?></td>
            </tr>
          </tbody>
        </table>
        <form action="index.php">
          <button type="submit" class="btn btn-success">Registrar otro alumno</button>
        </form>
    
</div>

    
        

    <!-------JS BOOSTRAP------------>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
</body>
</html>