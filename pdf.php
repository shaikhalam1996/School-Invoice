 <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$con = mysqli_connect("localhost","root","","module");



$invoice = "select invoice from pdf order by id DESC LIMIT 1";
$inv = mysqli_query($con,$invoice);
$inv_data = mysqli_fetch_assoc($inv);
$invoice_num = $inv_data['invoice'];
$invoice_num++;
$name = $_POST['name'];
$class = $_POST['class'];
$depositor = $_POST['depositor'];
$date = date('Y-m-d',strtotime($_POST['date']));
$month_fees=  "".$_POST['jan']." ".$_POST['feb']." ".$_POST['mar']." ".$_POST['apr']." ".$_POST['may'];
$intru_fees=  "".$_POST['idcard']." ".$_POST['book']." ".$_POST['uniform'];

$insert = "INSERT INTO `pdf`(`name`, `class`, `despositor`, `date`, `fees`, `instrument`, `invoice`) VALUES ('$name','$class','$depositor','$date','$month_fees','$intru_fees','$invoice_num')";
$query = mysqli_query($con,$insert);


$fees = "select fees from pdf where invoice='$invoice_num'";
$fee = mysqli_query($con,$fees);
$fee_data = mysqli_fetch_assoc($fee);
$fees_num = $fee_data['fees'];
$fees_string = str_replace(' ','',$fees_num);
$length = strlen($fees_string);
// echo $length;
$no_of_month = $length/3;
$amount=0;
$str;
if(isset($_POST['idcard'])){
    $str='ID CARD = 100Rs <br>';
   $amount=100;
}

if(isset($_POST['book'])){
    $str=$str .'Books = 500Rs <br>';
   $amount=$amount+500;
}

if(isset($_POST['uniform'])){
   $str= $str .'Uniform = 250Rs <br>';
   $amount=$amount+250;
}

$total= (500*$no_of_month)+$amount;
$html = "<div align='center'>
    <body style='height:147mm;width:102mm;margin-top:10px;margin-left:8px;'>
    <table border='1'>
        <tr>
            <td style='text-align:center;border-width:0px;font-size:20px;' colspan='4'>My Bill Receipt</td>
        </tr>
        <tr>
            <td colspan='2' rowspan='2'>Student Name:".$name."<br>
            Paid By:  ". $depositor."<br>
            Class:   ".$class."
        </td>
        <td colspan='2' align='right'>Date:".$date."</td>
        </tr>
        <tr>
            <td>
            Invoice:". $invoice_num."
            </td>
        </tr>

        <tr>
            <td>
            <b>Intrument</b>
            </td>
            <td>
            <b>Fee(Rs 500)</b>
            </td>
            <td>
            <b>Amount</b>
            </td>
            <td>
            <b>Total</b>
            </td>
            <!-- <td>
            <b>Month</b>
            </td> -->
        </tr>

        <tr>
            <td style='padding-bottom:150px; max-width:25ch;'>
           
          ".$str."

            </td>
            <td style='padding-bottom:150px max-width:25ch'>
                
                 ".$fee_data['fees']."
                
            </td>
            <td style='padding-bottom:150px max-width:25ch'>
            ".(500*$no_of_month)." + ".$amount."
            </td>
            <td style='padding-bottom:150px max-width:25ch'>
                
                ".$total."
            </td>
        </tr>


</table>
</body>
</div>";
// <input type='submit' name='submit' onclick='window.print()' value='Print Receipt'>

// if(isset('.$_POST['submit'])){

    require('vendor/autoload.php');
    
   
    $pdf=new \Mpdf\Mpdf();
    
    // $pdf->AddPage();
    // $pdf->SetFont("Arial","",16);
    // $pdf->Cell(0,10,"Student Invoice",1,1,'C');
    
    // $pdf->Cell(20,10,"Student Name",1,0);
    // $pdf->Cell(40,10,"Paid By",1,0);
    // $pdf->Cell(40,10,"Month Paid Fees",1,0);
    // $pdf->Cell(20,10,"Date",1,0);
    // $pdf->Cell(0,10,"Total Amount",1,0);
    
    // $pdf->Cell(20,10,$name,1,0);
    // $pdf->Cell(40,10,$depositor,1,0);
    // $pdf->Cell(40,10,$month_fees,1,0);
    // $pdf->Cell(20,10,$date,1,0);
    // $pdf->Cell(0,10,$total,1,0);
    $pdf->WriteHTML($html);
    
    $file = time().'.pdf';
    $update_pdf = "update pdf set total='$total',pdf_file='$file' where invoice='$invoice_num'";
    $pdf_query = mysqli_query($con,$update_pdf);
    $upload_pdf = 'upload/'.$file;
    $pdf->output($upload_pdf,'F');

    echo "<script>alert('Data Inserted')</script>";
    echo "<script>location.replace('index.php')</script>";

// }

?>