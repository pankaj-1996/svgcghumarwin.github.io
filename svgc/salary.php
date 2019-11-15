<?php
include "includes/dbcon.php";
?>
<?php
include "includes/header.php";
?>
  <?php
include "includes/navbar.php";
?>
 <?php

    if(isset($_POST['Add']))
    {
        $name=$_POST['Name'];
        $phoneno=$_POST['Phoneno'];
        $basic=$_POST['Basic'];
        $da=$_POST['Da'];
        $hra=$_POST['Hra'];
        $pf=$_POST['Pf'];
        $netpay=$_POST['Netpay'];
        $gross=$_POST['Gross'];
        $total=$_POST['Total'];
       
        $sql="insert into  tsalary( Name, Contact_no, Basic_salary, DA, HRA, PF, Net_pay, Gross_salary, Total_salary) values('$tid','$name','$phoneno','$basic','$da','$hra','$pf','$netpay','$gross','total')";
        $res=mysqli_query($con,$sql);
        if($res){
            echo "<script> alert('data inserted successfully') </script>";
        }
        else{
            echo "<script> alert('data insert failed') </script>";
        }
      
        
    }


?>

    <div class="bg-white">
        <h1 class="text-center text-dark"><b> <i>TEACHER SALARY DETAIL </i></b></h1>
    </div>
    <div class="container p-4  alignfull bg-dark" style="text-align: center;">
        
                <form class="form-inline justify-content-center" name="calculate" action="salary.php" method="POST">
                    <table class="mb-3 bg-info" cellpadding="2" width="65%" bgcolor="99FFFF" align="center" cellspacing="2">

                        <tr>
                            <td>Teacher ID</td>
                            <td class="p-2"><select name=" T_id ">
<option value="-1 " selected>select..</option>
</select></td>
                        </tr>
                         <tr>
                            <td> Name</td>
                            <td class="p-2"> <input type="text" name="Name"></td>
                        </tr>
                         <tr>
                            <td>Phone No</td>
                            <td class="p-2"> <input type="text" name="Phoneno"></td>
                        </tr>
                         <tr>
                            <td>Basic Salary</td>
                            <td class="p-2"> <input type="text" name="Basic"></td>
                        </tr>
                        
                         <tr>
                            <td>DA</td>
                            <td class="p-2"> <input type="text" name="Da"></td>
                        </tr>
                         <tr>
                            <td>HRA</td>
                            <td class="p-2"> <input type="text" name="Hra"></td>
                        </tr>
                         <tr>
                            <td>PF</td>
                            <td class="p-2"> <input type="text" name="Pf"></td>
                        </tr>
                         <tr>
                            <td>Net Pay</td>
                            <td class="p-2"> <input type="text" name="Netpay"></td>
                        </tr>
                         <tr>
                            <td>Gross Salary</td>
                            <td class="p-2"> <input type="text" name="Gross"></td>
                        </tr>
 <tr>
                            <td>Total Salary</td>
                            <td class="p-2"> <input type="text" name="Total"></td>
                        </tr> 
                        <tr>
                            <td><button type="button" name="Add" class="btn btn-dark mb-3 mr-3" style="height:40px;width:120px">Add</button></td>
                            <td> <button type="button" name="Update" class="btn btn-dark mb-3" style="height:40px;width:120px">Update</button></td>
</tr>
<tr>
    <td>  <button type="button" name="Delete" class="btn btn-dark mb-3 mr-3" style="height:40px;width:120px">Delete</button></td>
    <td><button type="button" name="Calculate" class="btn btn-dark mb-3" style="height:40px;width:120px" onclick="calculate()">Calculate</button></td>
</tr>
                    </table>
                </form><br>


                
            
               
           
    </div>
<script>
function calculate(){
 $basic=document.calculate.Basic.value;
 $da=document.calculate.Da.value;
 $hra=document.calculate.Hra.value;
 $netpay=document.calculate.Netpay.value;
 $pf=$basic+($basic * ($da / 100) + $basic * ($hra / 100));
 document.calculate.Pf.value=$pf;
  $gross = $basic * (12 / 100);
  document.calculate.Gross.value=$gross;
        $total = $pf - ($netpay + $gross);
document.calculate.Total.value=$total;

</script>
<?php
include "includes/footer.php";
?>
 