<?php 
 abstract class Libro{

protected $titulo;
protected $autor;
protected $can_carac;
protected $can_ilus;
CONST COSTO=100;


function __construct($title,$author,$carac,$ilus)
{
    $this-> titulo = $title;
    $this->autor= $author;
    $this-> can_carac=$carac;
    $this-> can_ilus= $ilus;
}


 function calcularExtension(){
if ( $this->can_carac > 1000000){
   return "Largo";

}elseif($this->can_carac <150000){

   return "Breve";
    
}else{
    return "Normal";
}
  
}

function calcularCostoEdicion(){
$a=$this->calcularExtension();
if ($a=="Normal"){
    return Libro::COSTO;
}elseif ($a=="Largo") {
        return  Libro::COSTO * 2  ;
}else{
    return Libro::COSTO * 0.5;
}
}
}





class LibroDigital extends Libro{


function CalcularBites(){
$result=$this->can_carac + ($this->can_ilus * 1000);
return $result;
}


function calcularCostoEdicionDigital(){
    return $this->calcularCostoEdicion() * 10;     
}
}








?>