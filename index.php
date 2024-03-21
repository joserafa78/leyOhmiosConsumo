<?php 
//Aplicando la Ley de Ohmio.
//Calcula el Comsumo Electrico en Artefactos Electricos.
//Pagos en Euros segun pais..
//@joserafa78
$Precio_kiloWatioHora=0.33; //Moneda Euros, Segun Pais.;
$moneda="Euro"; //Moneda.
$watiosDia=0;
$kiloWatiosDia=0;
$costoArtefacto=0;
echo"******************************"."\n";
echo "--------LEY DE OHMIOS--------"."\n" ;
echo "        @joserafa78          "."\n" ;
echo"******************************"."\n";
$voltaje= readline("Indique voltaje: ");
$watios= readline("Indique Watios: ");
$horas= readline("Indique las horas al Dia: ");// Tiempo encendido del Artefacto.
echo "Voltaje=".$voltaje." - "."Wattios=".$watios."\n";
$amperio= $watios/$voltaje;
$watiosDia=$watios*$horas;
$kiloWatiosDia=$watiosDia/1000;
$costoArtefacto=$kiloWatiosDia*$Precio_kiloWatioHora;
echo"\n";
echo"\n";
echo "Amperios = ".round($amperio,3)."\n"; // La Funcion (round) Redondea a 5 digitos.
echo "KiloWatiosHoras = ". $watiosDia."\n"; 
echo "Costo Al Dia: ".$costoArtefacto." ".$moneda."\n";
echo "Pago Mensual (30 Dias): ".$costoArtefacto*30 ." ".$moneda."\n";
echo "\n";
//FIN DEL CURSO BASICO DE PHP - PLATZI.


?>