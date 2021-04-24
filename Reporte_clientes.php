<?php

require('fpdf.php');

class PDF extends FPDF
{
  
// Cabecera de página
function Header()


{



    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
      $this->SetFont('Arial','B',8);
    $this->Cell(195,10,date('d/m/Y'),0,1,'R');
    $this->Ln(-5);
    $this->Cell(195,10,date('h:i A'),0,1,'R');
    $this->Ln(-10);
    
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->SetFont('Arial','B',15);
     $this->Cell(60,10,'SILYMAN',0,0,'C');
     $this->Ln(10);
      $this->Cell(65);
     $this->Cell(60,10,'Control de plagas',0,0,'C');
     $this->Ln(10);
     $this->Cell(65);
    $this->Cell(60,10,'Registro de clientes',0,0,'C');
    
    
    // Salto de línea
    $this->Ln(25);
    
    
 

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    $this->SetX(-25);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    
}
}

require 'conexion_db.php';

$consulta="SELECT * FROM cliente;";
$resultado= $conexion->query($consulta); 

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$linea = '----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------';
$pdf->SetFont('Arial','B',6);
$pdf->Cell(45,2,$linea,0,1,'L',0);

$pdf->Cell(7.2,2.5,'Id',0,0,'L',0);
$pdf->Cell(35,2.5,'Nombre',0,0,'L',0);
$pdf->Cell(35,2.5,'Apellido',0,0,'L',0);
$pdf->Cell(50,2.5,'Direccion',0,0,'L',0);

$pdf->Cell(40,2.5,'Contacto',0,0,'L',0);

$pdf->Cell(45,2.5,'Correo',0,1,'L',0);

$pdf->Cell(45,2,$linea,0,1,'L',0);





$resultado3= $conexion->query($consulta); 

$pdf->SetFont('Arial','',6);

while($lista = $resultado3->fetch_assoc()){
 
  $direccion = $direccion=$lista['No. Calle'].' '.$lista['Colonia'].' '.$lista['Ciudad'];;
   $pdf->Cell(7.2,2.5,$lista['idCliente'],0,0,'L',0);
$pdf->Cell(35,2.5, utf8_decode($lista['Nombre']),0,0,'L',0);
$pdf->Cell(35,2.5, utf8_decode($lista['Apellido']),0,0,'L',0);

$pdf->Cell(50,2.5,$direccion,0,0,'L',0);

$pdf->Cell(40,2.5,$lista['Telefono'],0,0,'L',0);

$pdf->Cell(45,2.5, utf8_decode($lista['Correo']),0,1,'L',0);

$pdf->Cell(45,2,$linea,0,1,'L',0);

}
       
        
$pdf->Output();