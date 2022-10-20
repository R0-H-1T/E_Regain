<?php
    require('../fpdf/fpdf.php');

    include '../DBConn/dbconn.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $productID = $_REQUEST["prodID"];

        if(isset($_REQUEST["receipt"])){

            $sql = "SELECT userName from users join products on user_id = userID where productID = $productID";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                //echo $row["userName"];

                $pdf=new FPDF();
                $pdf->AddPage();
                $pdf->SetFont('Arial','B',16);
                $pdf->Cell(40,10, 'Hello '.$row["userName"]); 
                $pdf->Output();
            }else {
                echo "greater than one; REALLY";
            }

            



            
        }
    }


?>