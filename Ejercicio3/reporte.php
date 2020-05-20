<?php
    extract ($_POST);
    $consumo = ((22*$lt));

    $consumoAjustado = max($consumo, 120);
    switch($zone){
        case "A":
            $descZona = 3;
        break;

        case "B":
            $descZona = 6;
        break;

        case "C":
            $descZona = 10;
        break;

        case "D":
            $descZona = 15;
        break;

        case "E":
            $descZona = 20;
        break;
    }

    $consumoDescZona = (($consumo * (100-$descZona) /100));

    $consumoFinal = $consumoDescZona;
    if($age>=60){
        $consumoFinal = $consumoDescZona*.5;
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
        $sql = "INSERT INTO ejercicio3 (nombre, apellidos, edad,numeroContrato,domicilio,zona,metros3,total)
        VALUES ('$name', '$lastname', '$age', '$contract', '$dom', '$zone', '$lt', '$consumoFinal')";
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


                Nombre: <?php echo $name." ".$lastname;?><br>
                Edad: <?php echo $age;?><br>
                Domicilio: <?php echo $dom;?><br>
                Contrato: <?php echo $contract;?><br>
                Litros consumidos: <?php echo $lt;?><br>
                Consumo total: <?php echo $consumo;?><br>
                Consumo ajustado: <?php echo $consumoAjustado;?><br>
                Descuento del <?php echo $descZona;?>% por vivir en la zona <?php echo $zone; ?><br>
                Consumo con descuento: <?php echo $consumoDescZona;?><br>
                Descuento del 50% por tercera edad: <?php if($age>=60){echo "Sí";}else{echo"No";}?><br>

                
                <div class="row">
                    <div class="col-md-6">
                        <h5>Total a pagar: </h5>
                    </div>
                    <div class="col-md-3" id="result">
                        <div id=""><?php echo $consumoFinal;?></div>
                    </div>
                </div>
                <form action="index.php">
                <div class="row">
                    <div class="col" id="colbtn">
                        <button type="input" class="btn btn-info">Registrar otro pago</button>
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