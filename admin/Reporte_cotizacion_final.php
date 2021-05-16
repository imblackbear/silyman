<?php
require('../fpdf.php');

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
    $this->Cell(60,10,'Cotizacion servicio de control de plagas',0,0,'C');
    
    
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

require '../conexion_db.php';

    
    
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$ID = $_GET['id'];
$consulta="SELECT * FROM evaluacion where idEvaluacion='$ID';";
$resultado= $conexion->query($consulta);
$lista = $resultado->fetch_assoc();
$cliente=$lista['cliente_idCliente'];
$consulta1="SELECT * FROM cliente WHERE idCliente = '$cliente' ;";
$resultado1= $conexion->query($consulta1);
$cotizacion=$lista['cotizacion_idCotizacion'];
$consulta2="SELECT * FROM cotizacion WHERE idCotizacion = '$cotizacion';";
$resultado2= $conexion->query($consulta2);

        $lista1 = $resultado1->fetch_assoc();
        $lista2 = $resultado2->fetch_assoc();
       
        $pdf->SetFont('Arial','B',12);
 $pdf->Cell(35,5,'No. Facturacion:',0,0,'L');
 $pdf->SetFont('Arial','',12);
  $pdf->Cell(10,5,$lista['idEvaluacion'],0,1,'L');
  $pdf->SetFont('Arial','B',12);
   $pdf->Cell(25,5,'No. Cliente:',0,0,'L');
   $pdf->SetFont('Arial','',12);
  $pdf->Cell(10,5,($lista['cliente_idCliente']),0,1,'L');
  $pdf->SetFont('Arial','B',12);
     $pdf->Cell(25,5,'Cliente:',0,0,'L');
     $pdf->SetFont('Arial','',12);
  $pdf->Cell(10,5,utf8_decode($lista1['Nombre']).' '.utf8_decode($lista1['Apellido']),0,1,'L');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(25,5,'Direccion:',0,0,'L');
  $pdf->SetFont('Arial','',12);
    $direccion = $direccion=$lista1['No. Calle'].' '.$lista1['Colonia'].' '.$lista1['Ciudad'];
  $pdf->Cell(50,5,utf8_decode($direccion),0,1,'1',0);
   $pdf->SetFont('Arial','B',12);
  $pdf->Cell(65,5,'Fecha de cotizacion solicitada:',0,0,'L');
   $pdf->SetFont('Arial','',12);
   $pdf->Cell(65,5,$lista['fecha_consulta'],0,1,'L');
  $pdf->Ln(5);
  $pdf->SetFont('Arial','B',12);
   $pdf->Cell(195,5,utf8_decode('De nuestra consideracíon:'),0,1,'L',0);
   $pdf->SetFont('Arial','',12);
  $pdf->MultiCell(195, 5,utf8_decode('La presente tiene por objeto hacerte llegar nuestros cordiales saludos y a la vez presentarles nuestra cotizacion con respecto al servicio que solicito'), 0, 'C', 0);
  
   
  $pdf->Ln(10);
   $pdf->SetFont('Arial','B',12);
    $pdf->SetX(50);
    $pdf->Cell(50,5,'Tipo de servicio:',1,0,'C'); 
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,5,utf8_decode($lista2['Tipo_insecto']),1,1,'C'); 
    $pdf->SetX(50);
    $pdf->SetFont('Arial','B',12);
  $pdf->Cell(50,5,'Metros:',1,0,'C'); 
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(50,5,$lista2['Metros'],1,1,'C');
  $pdf->SetX(50);
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(50,5,'Costo de servico($):',1,0,'C'); 
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(50,5,$lista['Costo_serv'],1,1,'C');
  $pdf->SetX(50);
  $pdf->SetFont('Arial','B',12);
   $pdf->Cell(50,5,'Concepto:',1,0,'C'); 
   $pdf->SetFont('Arial','',12);
$pdf->MultiCell(50, 5,utf8_decode($lista['Concepto']), 1, 'C', 0);
 $pdf->Ln(20);
   $pdf->SetFont('Arial','B',12);
      $pdf->SetX(15);
  $pdf->Cell(50,5,'ATTE:',0,1,'l');
$pdf->Cell(50,5,'Ing. Oscar Jaramillo',0,1,'C');

 
$pdf->Output();