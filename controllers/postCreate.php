<?php

    include("./conexion.php");
    $conn = new Conexion;
    $conn = $conn->Conectar();
    $slq = "INSERT INTO blog (tittle,bodytext) VALUES (:TITTLE,:TEXTT)";

    if(isset($_POST["submit"])){
        if(isset($_POST["tittle"]) && isset($_POST["body"])){
            $insert = $conn->prepare($slq);
            try{
                $conn->beginTransaction();
                $insert->execute(array(":TITTLE"=>$_POST["tittle"],":TEXTT"=>$_POST["body"]));
                $conn->commit();
                echo "Nice";
                header("location: ../index.php");
            }catch (Exception $e){
                $conn->rollBack();
                echo "Error al insertar data: $e";
            }
        }
    }
?>