<?php 
   
    require_once("../model/Car.php");
    require_once("../model/Bike.php");
    require_once("../model/MotoWay.php");    
    require_once("../model/ResidentialWay.php");
    require_once("../model/PedestrianWay.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Basics | Part 3 : Abstraction</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>POO - Basics | Part 3 : Abstraction</h1>
    <?php
        $myCar=new Car("red",4,"fuel"); 
        $myBike=new Bike("green",1,"electric");
        $mySkateBoard=new SkateBoard("stone",1,"electric");

        $currentMotoWay=new MotoWay();
        $currentResidentialWay=new ResidentialWay();
        $currentPedestrian=new PedestrianWay();

        if ($currentMotoWay->setCurrentVehicles($myCar))
        {
            echo "En voiture Simonne on MotoWay !";
            var_dump($currentMotoWay->getCurrentVehicles());
        }
       
        if (!$currentMotoWay->addVehicle($myBike)){
            echo "<p>Sorry ! is not good  ! Bike is not possible in MotoWay</p>";
        }

        if(!$currentPedestrian->addVehicle($myCar)){
            echo "<p>Sorry ! is not good on Pedestrian ! Just for Bike and SkateBoard</p>";
        }

    ?>
</body>
</html>