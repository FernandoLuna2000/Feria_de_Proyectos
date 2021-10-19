<?php
	include 'plantilla.php';
	$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
    if (isset($_POST["id_proyecto"]))
    {
    //Se almacena en una variable el id del registro a eliminar
    $id_p = $_POST["id_proyecto"];
    $query = "SELECT * FROM proyectos where idProyecto=$id_p";
	$resultado = $mysqli->query($query);
	
	$pdf = new FPDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
    $pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
        $pdf->Cell(50,6,'idProyecto',1,1,'C',1);
		$pdf->Cell(50,6,utf8_decode($row['idProyecto']),2,1,'C');

        $pdf->Cell(50,6,'Impacto',1,1,'C',1);
		$pdf->Cell(50,6,utf8_decode($row['Impacto']),2,1,'C');
		
        $pdf->Cell(50,6,'Objetivo',1,1,'C',1);
        $pdf->Cell(50,6,utf8_decode($row['Objetivo']),2,1,'C');

        $pdf->Cell(50,6,'Categoria',1,1,'C',1);
        $pdf->Cell(50,6,utf8_decode($row['Categoria']),2,1,'C');

        $pdf->Cell(50,6,'Patente',1,1,'C',1);
		$pdf->Cell(50,6,utf8_decode($row['Patente']),2,1,'C');

        $pdf->Cell(50,6,'Grado',1,1,'C',1);
		$pdf->Cell(50,6,utf8_decode($row['Grado']),2,1,'C');

        $pdf->Cell(50,6,'Grupo',1,1,'C',1);
        $pdf->Cell(50,6,utf8_decode($row['Grupo']),2,1,'C');

        $pdf->Cell(50,6,'I1',1,1,'C',1);
		$pdf->Cell(20,6,$row['idIntegrante1'],2,1,'C');

        $pdf->Cell(50,6,'I2',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante2'],2,1,'C');

        $pdf->Cell(50,6,'I3',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante3'],2,1,'C');

        $pdf->Cell(50,6,'I4',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante4'],2,1,'C');

        $pdf->Cell(50,6,'I5',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante5'],2,1,'C');

        $pdf->Cell(50,6,'I6',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante6'],2,1,'C');

        $pdf->Cell(50,6,'I7',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante7'],2,1,'C');
        
	    $pdf->Cell(50,6,'I8',1,1,'C',1);
        $pdf->Cell(20,6,$row['idIntegrante8'],2,1,'C');
	}
	$pdf->Output();
}
}
    
	
	
?>