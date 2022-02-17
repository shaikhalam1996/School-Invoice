<?php

require('vendor/autoload.php');

$con=mysqli_connect('localhost','root','','module');
$id = $_GET['id'];
$select = "select * from pdf where id = '$id'";
$res=mysqli_query($con,$select);
$num = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
	    $html='<style></style><table border="1" class="table">';
		$html.='<tr><th>ID</th><th>Inovice</th><th>Name</th><th>Class</th><th>Depositor</th><th>Month Fees Paid</th><th>Date Of Admission</th><th>Intrument</th><th>Total</th></tr>';

        $html.='<tr><td>'.$row['id'].'</td><td>'.$row['invoice'].'</td><td>'.$row['name'].'</td><td>'.$row['class'].'</td><td>'.$row['despositor'].'</td><td>'.$row['fees'].'</td><td>'.$row['date'].'</td><td>'.$row['instrument'].'</td><td>'.$row['total'].'</td></tr>';
       $html.='</table>';

$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'D');
?>