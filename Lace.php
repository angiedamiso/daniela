
<?php

/*********************************
 creada: 03-08-2017
 Se encarga de realizar el proceso de tirada y devolver el resultado.
 consta de 2 dados
*/
public class Lance{

$dado1=new Dado();
$dado2=new Dado();


/*************
representa la tirada de un jugador y devuelve la puntuacion
retorna un numero que representa la suma de la puntuacion de 2 dados.
**/
public tirar(){

 $this->dado1->setCantidad(rand(1,6));
 $this->dado2->setCantidad(rand(1,6));
 
 return $this->dado1->getCantidad() + $this->dado->getCantidad();
}// fin tirar
}
?>