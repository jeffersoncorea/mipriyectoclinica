<?php
require('fpdf/fpdf.php');
require('cnx.php');

class PDF extends FPDF
{
    // Header of the page
    function Header()
    {
        // Logo
        $this->Image('fpdf/img/hola2.png', 10, 8, 55);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(40, 10, 'Facturas Farmacia', 0, 1, 'C');
        // Line break
        $this->Ln(10);
    }

    // Footer of the page
    function Footer()
    {
        // Position: 1.5 cm from the bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    // Function to create a colored cell
    function ColoredCell($width, $height, $text, $border = 1, $align = 'L', $bgColor = array(255, 255, 255), $textColor = array(0, 0, 0))
    {
        $this->SetFillColor($bgColor[0], $bgColor[1], $bgColor[2]);
        $this->SetTextColor($textColor[0], $textColor[1], $textColor[2]);
        $this->Cell($width, $height, $text, $border, 0, $align, true);
    }

    // Function to create a table header
    function TableHeader()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->ColoredCell(25, 10, 'ID', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(40, 10, 'Nombre', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(40, 10, 'Producto', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(30, 10, 'Cantidad', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(30, 10, 'Fecha', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(30, 10, 'Total', 1, 'C', array(200, 200, 200));
        $this->Ln();
    }

    // Function to create the most sold product section
    function MostSoldProductHeader()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(0, 10, 'Producto Mas Vendido', 1, 1, 'C');
        $this->SetFont('Arial', 'B', 9);
        $this->ColoredCell(100, 10, 'Producto', 1, 'C', array(200, 200, 200));
        $this->ColoredCell(30, 10, 'Cantidad Vendida', 1, 'C', array(200, 200, 200));
        $this->Ln();
    }
}

// Create an instance of the PDF class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 10);
$pdf->Ln(10);

// Table header for the invoices
$pdf->TableHeader();

// Get the list of invoices
$query = "SELECT id, nombre, productoF, cantidad, fecha, total FROM facturas";
$result = $camino->query($query);

$totalGeneral = 0; // Variable to accumulate total

// Check if there are results
if ($result->num_rows > 0) {
    // Fetch data and add to the PDF
    while ($fila = $result->fetch_assoc()) {
        $pdf->SetFont('Times', '', 9);
        // Alternate row background color
        $bgColor = ($pdf->GetY() % 20 == 0) ? array(240, 240, 240) : array(255, 255, 255);
        $pdf->ColoredCell(25, 10, $fila['id'], 1, 'C', $bgColor);
        $pdf->ColoredCell(40, 10, $fila['nombre'], 1, 'L', $bgColor);
        $pdf->ColoredCell(40, 10, $fila['productoF'], 1, 'L', $bgColor);
        $pdf->ColoredCell(30, 10, $fila['cantidad'], 1, 'C', $bgColor);
        $pdf->ColoredCell(30, 10, $fila['fecha'], 1, 'C', $bgColor);
        $pdf->ColoredCell(30, 10, number_format($fila['total'], 2), 1, 'C', $bgColor);
        $pdf->Ln();
        $totalGeneral += $fila['total']; // Sum total
    }
} else {
    $pdf->Cell(0, 10, 'No hay facturas registradas.', 1, 1, 'C');
}

// Summary of totals
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(165, 10, 'Total General:', 1, 0, 'R');
$pdf->Cell(30, 10, number_format($totalGeneral, 2), 1, 1, 'C');

// Query to find the most sold product
$queryMostSold = "
    SELECT productoF, SUM(cantidad) AS total_vendido
    FROM facturas
    GROUP BY productoF
    ORDER BY total_vendido DESC
    LIMIT 1
";
$resultMostSold = $camino->query($queryMostSold);

// Add a space before the most sold product section
$pdf->Ln(10);
$pdf->MostSoldProductHeader();

if ($resultMostSold->num_rows > 0) {
    $mostSold = $resultMostSold->fetch_assoc();
    $pdf->SetFont('Times', '', 9);
    $pdf->ColoredCell(100, 10, $mostSold['productoF'], 1, 'L');
    $pdf->ColoredCell(30, 10, $mostSold['total_vendido'], 1, 'C');
} else {
    $pdf->Cell(100, 10, 'No se encontraron productos vendidos.', 1, 1, 'C');
}

// Output the PDF
$pdf->Output();
?>