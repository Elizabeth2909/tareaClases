<?php

class Impresora
{
	protected $marca;	
	protected $modelo;
	protected $color;	
	protected $tipoTinta;
	protected $hojasPorCartucho;

	function __construct($marca, $modelo, $color, $tipoTinta, $hojasPorCartucho)
	{
		$this->marca=$marca;
		$this->modelo=$modelo;
		$this->color=$color;
		$this->tipoTinta=$tipoTinta;
		$this->hojasPorCartucho=$hojasPorCartucho;
	}


	function imprimir($numImpresiones)
	{
	   if($this->hojasPorCartucho<=0) 
	   {
	       echo "Se agoto la tinta";
       } 
       elseif($numImpresiones>$this->hojasPorCartucho) 
       {
	   	   $this->hojasPorCartucho=0;
	   } 
	   else 
	   {
	   	   $this->hojasPorCartucho-=$numImpresiones;
	   }	 
	}


	public function setImpresionesDisp($hojasPorCartucho)
	{
		$this->hojasPorCartucho=$hojasPorCartucho;		
	}
     function getDisponibles()
	{
	   return "Tiene {$this->hojasPorCartucho} impresiones disponibles en la impresora {$this->modelo}\n";
	}	
}


$impresoraHp=new Impresora("HP","Pro 5211","negra", "Toner", 100);
$impresoraSamsumg=new impresora("Samsumg","K5245","Blanca", "De inyeccion", 400);
$impresoraEpson=new impresora("SEpson","HY485","Gris", "Toner", 500);



echo $impresoraHp->getDisponibles();
$impresoraHp->imprimir(50);
echo $impresoraHp->getDisponibles();
echo $impresoraSamsumg->getDisponibles();
echo $impresoraEpson->getDisponibles();
?>
