<?php

require_once ('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // $this->Image('../img/logo.png', 10, 10, 40); // Adiciona a imagem no canto superior esquerdo
    // $this->Ln(20);
    $this->image('../imgs/Glogo.jpg', 72, 7, 70); // X, Y, Tamaño
    // $this->image('../img/logo.png', 150, 1, 60); // X, Y, Tamaño
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
  
    // Movernos a la derecha
    $this->Cell(60);

    // Título
    $this->Cell(70,30,'TABELA DE VENDAS',0,0,'C');
    // Salto de línea
   
    $this->Ln(30);
    $this->SetFont('Arial','B',10);
    $this->SetX(8);
    $this->Cell(25,10,'ID',1,0,'C',0);
    $this->Cell(40,10,'NOME',1,0,'C',0,);
    $this->Cell(27,10,'TAXA',1,0,'C',0);
    $this->Cell(27,10,'VR PASSADO',1,0,'C',0);
    $this->Cell(40,10,'VR RETIRADO',1,0,'C',0);
    $this->Cell(30,10,'VENDEDOR(A)',1,1,'C',0);


    // $this->Cell(25,10,'Id',1,0,'C',0);
    // $this->Cell(40,10,'Nome',1,0,'C',0);
    // $this->Cell(27,10,'Cpf',1,0,'C',0,);
    // $this->Cell(27,10,'rg',1,0,'C',0);
    // $this->Cell(40,10,'celular',1,0,'C',0);
    // $this->Cell(30,10,'cidade',1,0,'C',0);
	

  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
  
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
   //$this->SetFillColor(223, 229,235);
    //$this->SetDrawColor(181, 14,246);
    //$this->Ln(0.5);
}
}

$conexion=mysqli_connect("localhost","root","","gcred");
// $consulta = "SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
// user.fecha, permisos.rol FROM user
// LEFT JOIN permisos ON user.rol = permisos.id";
$consulta = "SELECT vend.id_vendas, vend.nome, vend.taxa, vend.pix, vend.valor, vend.valorR, vend.criado_por, vend.operacao, vend.conta, vend.agencia, vend.banco, vend.cpf, vend.tipConta, vend.situacao, vend.loja,
l.nome_loja as lj_nome, l.localidade
from vendas as vend
inner join loja as l on l.id_lojas=vend.loja";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//$pdf->SetWidths(array(10, 30, 27, 27, 20, 20, 20, 20, 22));
while ($row=$resultado->fetch_assoc()) {

    $pdf->SetX(8);

    $pdf->Cell(25,10,$row['id_vendas'],1,0,'C',0);
    $pdf->Cell(40,10,$row['nome'],1,0,'C',0);
	$pdf->Cell(27,10,$row['taxa'],1,0,'C',0);
    $pdf->Cell(27,10,$row['valor'],1,0,'C',0);
    $pdf->Cell(40,10,$row['valorR'],1,0,'C',0);
    $pdf->Cell(30,10,$row['criado_por'],1,1,'C',0);


} 


	$pdf->Output();
?>