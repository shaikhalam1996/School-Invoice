<?php
// require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','module');
$res=mysqli_query($con,"select * from pdf");
$num = mysqli_num_rows($res);
	?>
	<table border="1">
			<tr>
			<th>ID</th>
			<th>Invoice</th>

			<th>Name</th>
			<th>Class</th>
			<th>Depositor</th>
			<th>Month Fees Paid</th>
			<th>Date Of Admission</th>

			<th>Intrument</th>
			<th>Total</th>
			<th>Download PDF</th>

		</tr>
			

			
			<?php
			// $html='<style></style><table class="table">';
			// 	$html.='<tr><td>ID</td><td>Name</td><td>Email</td></tr>';
				while($row=mysqli_fetch_assoc($res)){
					?>
						<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['invoice']; ?></td>

			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['class']; ?></td>
			<td><?php echo $row['despositor']; ?></td>
			<td><?php echo $row['fees']; ?></td>
			<td><?php echo $row['date']; ?></td>

			<td><?php echo $row['instrument']; ?></td>
			<td><?php echo $row['total']; ?></td>
			<td><a href="viewbill.php?id=<?php echo $row['id']; ?>">View Invoice</a></td>

		</tr>
					

					
					<?php
		}

// $mpdf=new \Mpdf\Mpdf();
// // $mpdf->WriteHTML($html);
// $file=time().'.pdf';
// $mpdf->output($file,'D');
//D
//I
//F
//S

?>
</table>