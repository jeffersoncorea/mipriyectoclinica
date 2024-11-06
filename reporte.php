<?php
require('fpdf/fpdf.php');
require("cnx.php");

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('fpdf/img/hola2.png', 15, 1, 60);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(45, 10, 'Historial de Citas', 1, 0, 'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    // Función para la cabecera de la tabla
    function FancyTableHeader()
    {
        // Colores de la cabecera
        $this->SetFillColor(100, 149, 237); // Color de fondo (cornflower blue)
        $this->SetTextColor(255); // Color de texto (blanco)
        $this->SetFont('Arial', 'B', 10);
        
        // Ancho de las columnas
        $this->Cell(20, 10, 'Doctor', 1, 0, 'C', true);
        $this->Cell(30, 10, 'IdentidadR', 1, 0, 'C', true);
        $this->Cell(30, 10, 'Nombre', 1, 0, 'C', true);
        $this->Cell(35, 10, 'Departamento', 1, 0, 'C', true);
        $this->Cell(20, 10, 'Direccion', 1, 0, 'C', true);
        $this->Cell(25, 10, 'Descripcion', 1, 0, 'C', true);
        $this->Cell(20, 10, 'Fecha', 1, 0, 'C', true);
        $this->Cell(20, 10, 'Hora', 1, 1, 'C', true); // Salto de línea al final
        $this->SetTextColor(0); // Restablecer el color de texto a negro
        $this->SetFont('Arial', '', 9);
    }

    // Función para agregar una fila de datos
    function FancyTableRow($data)
    {
        $this->Cell(20, 10, $data['nomdoc'], 1);
        $this->Cell(30, 10, $data['identidadR'], 1);
        $this->Cell(30, 10, $data['nombre'], 1);
        $this->Cell(35, 10, $data['departamento'], 1);
        $this->Cell(20, 10, $data['direccion'], 1);
        $this->Cell(25, 10, $data['descripcion'], 1);
        $this->Cell(20, 10, $data['fecha'], 1);
        $this->Cell(20, 10, $data['hora'], 1);
        $this->Ln();
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 9);
$pdf->Ln(10);

// Cabecera de la tabla
$pdf->FancyTableHeader();

// Obtener resultados de la base de datos
$carrito = "SELECT * FROM reserva";
$consulta = mysqli_query($camino, $carrito);

while ($fila = mysqli_fetch_array($consulta)) {
    $pdf->FancyTableRow($fila);
}

// Salida del PDF
$pdf->Output();
?>

