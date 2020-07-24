<?php

 class Producto{
     public function consultaTodos(){
         $sql = "CALL Produ_Ma_Cons";
         try {
             $conexion = Conexion::conectar();
             $query = $conexion->prepare($sql);
             
             $query->execute();
             
             $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
             return $resultado;
                      
         } catch (PDOException $ex) {
             return $ex->getMessage();
         }
     }
 }

