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

    if(isset($_POST['Submit']))
    {
        $ayear=$_POST['Ayear'];
        $name=$_POST['Name'];
        $fname=$_POST['Fathername'];
        $dob=$_POST['Dob'];
        $course=$_POST['Course'];
        $tength=$_POST['Tength'];
        $twelve=$_POST['Twelve'];
        $gender=$_POST['Gender'];
        $address=$_POST['Address'];
        $contact=$_POST['Contact'];
        $email=$_POST['E-mail'];
        $graduation=$_POST['Graduation'];
        $category=$_POST['Category'];
        $year=$_POST['Year'];
        $tuition=$_POST['Tuition'];
        $fee=$_POST['Fee'];
        $total=$_POST['Total'];
        $sql="insert into  stadmission(Acd_year,Name,Father_name,Gender,DOB,Per_10, per_12,Graduation,Address,Contact_no,Course,Category,Tuition_fee,Fee_amt,Total_fee,E-mail,Sem) values('$ayear','$name','$fname','$gender','$dob','$tength','$twelve','$graduation','$address','$contact','$course','$category','$tuition','$fee','$total','$email','$year')";
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
        <h1 class="text-center text-dark"> <b><i> STUDENT ADMISSION </i></b> </h1>
    </div>
    <div class="container p-4 alignfull bg-dark" style="text-align: center;">

           
                <form class="form-inline justify-content-center" action= "admission.php" method="POST">
                    <table class="mb-3 bg-info" cellpadding="2" width="50%"  align="center" cellspacing="2">
<tr>
                            <td>Acad. Year</td>
                            <td class="p-4"><select name=" Ayear ">
<option value="-1 " selected>select..</option>
<option value="2014" selected>2014</option>
<option value="2015" selected>2015</option>
<option value="2016 " selected>2016</option>
<option value="2017 " selected>2017</option>

</select></td>
                        </tr>
                        <tr>
                            <td> Name</td>
                            <td class="p-2"> <input type="text" name="Name"></td>
                        </tr>
                        <tr>
                            <td>Roll No</td>
                            <td class="p-2"> <input type="text" name="Rollno"></td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td class="p-2"> <input type="text" name="Fathername"></td>
                        </tr>
<tr>
                            <td>DOB</td>
                            <td class="p-2"> <input type="date" name="Dob"></td>
                        </tr>
                        <tr>
                            <td>Course</td>
                            <td class="p-2"><select name=" Course ">
<option value="-1 " selected>select..</option>
<option value="B.Sc.(Medical) " selected>B.Sc.(Medical)</option>
<option value="B.Sc.(Non-Medical) " selected>B.Sc.(Non-Medical)</option>
<option value="B.Sc.(CS)" selected>B.Sc.(CS)</option>
<option value=" B.A." selected>B.A.</option>
<option value="B.Com. " selected>B.Com.</option>
<option value="BCA " selected>BCA</option>
<option value="BBA " selected>BBA</option>
<option value="M.Sc.(Maths) " selected>M.Sc.(Maths)</option>
</select></td>
                        </tr>
                        <tr>
                            <td> %_10th</td>
                            <td class="p-2"> <input type="number" name="Tength" min="1" max="100" step="1" value="1"></td>
                            <td> %_+2 </td>
                            <td class="p-2"> <input type="number" name="Twelve" min="1" max="100" step="1" value="1"></td>
                        </tr>
                         <tr>
                            <td>Gender</td>
                            <td><input type="radio" name="Gender" value="Male" size="10">Male
                                <input type="radio" name="Gender" value="Female" size="10">Female</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td class="p-2"><input type="text" name="Address"></td>
                        </tr>
                        <tr>
                            <td>Contact_No</td>
                            <td class="p-2"><input type="text" name="Contact"></td>
                            <td>E-mail</td>
                            <td class="p-2"><input type="text" name="E-mail"></td>
                        </tr>
                           <tr>
                            <td>Graduation</td>
                            <td class="p-2"><input type="number" min="1" max="4" step="1" name="Graduation"></td>
                        <tr>
                            <td> Category</td>
                            <td class="p-2"><select name=" Category ">
<option value="-1 " selected>select..</option>
<option value="General" selected>General</option>
<option value="SC" selected>SC</option>
<option value="ST " selected>ST</option>
<option value="OBC " selected>OBC</option>
<option value="Others" selected>Others</option>
</select></td>

                        </tr>
                       
                        <tr>
                            <td>Year/Sem</td>
                            <td class="p-2"><select name=" Year ">
<option value="-1 " selected>select..</option>
<option value="1st " selected>1st</option>
<option value="2nd" selected>2nd</option>
<option value="3rd " selected>3rd</option>
<option value="4th " selected>4th</option>
<option value="5th " selected>5th</option>
<option value="6th " selected>6th</option>
</select></td>
                        </tr>
    <tr class="text-primary"> <td class="pt-4" style="text-align:right";><h2><b>Fee Detail</b></h2></td></tr>
  <tr>
                            <td>Tuition Fee</td>
                            <td class="p-2"><input type="text" name="Tuition"></td>
                        </tr>
                          <tr>
                            <td>Fee Amount</td>
                            <td class="p-2"><input type="text" name="Fee"></td>
                        </tr>
                          <tr>
                            <td>Total Fee</td>
                            <td class="p-2"><input type="text" name="Total"></td>
                        </tr>
<tr>
    <td style="text-align:right">   <button type="button" name="Submit" class="btn btn-dark  mb-3 mr-5">Submit</button>  </td>
</tr>
                    </table>
                    </form>
    </div>
    
<?php
include "includes/footer.php";
?>
 