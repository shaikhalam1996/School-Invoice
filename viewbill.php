<?php
// require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','module');
$id = $_GET['id'];
$select = "select * from pdf where id = '$id'";
// echo $select;
// die();
$res=mysqli_query($con,$select);
$num = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
	?>
<div align="center">
    <body style="height:147mm;width:102mm;margin-top:10px;margin-left:8px;">
    <table border="1">
        <tr>
            <td style="text-align:center;border-width:0px;font-size:20px;" colspan="4">My Bill Receipt</td>
        </tr>
        <tr>
            <td colspan="2" rowspan="2">Student Name:<?php echo $row['name']; ?> <br>
            Paid By: <?php echo $row['despositor']; ?><br>
            Class: <?php echo $row['class']; ?>
        </td>
        <td colspan="2" align="right">Date: <?php echo $row['date']; ?></td>
        </tr>
        <tr>
            <td>
            Invoice: <?php echo $row['invoice']; ?>
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
            <b>Total</b>
            </td>
            <!-- <td>
            <b>Month</b>
            </td> -->
        </tr>

        <tr>
            <td style="padding-bottom:150px; max-width:25ch;">
            <?php
           echo $row['instrument'];
            ?>

            </td>
            <td style="padding-bottom:150px; max-width:25ch;">
                <?php
                echo $row['fees'];
                ?>
            </td>
        
            <td style="padding-bottom:150px; max-width:25ch;">
                <?php 
               
                echo  $row['total'];
                ?>
            </td>
        </tr>

</table>
<!-- <input type="submit" name="submit" onclick="window.print()" value="Print Receipt"> -->
 <a href="export.php?id=<?php echo $id; ?>">Download PDF</a>
    </body>
</div>