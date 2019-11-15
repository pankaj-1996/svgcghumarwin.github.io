<?php
include "includes/header.php";
?>
  <?php
include "includes/navbar.php";
?>


    <div class="bg-white">
        <h1 class="text-center text-dark"><b> <i> STUDENT INFORMATION </i></b> </h1>
    </div>
    <div class="container   alignfull bg-dark" style="text-align: center;">
        <div class="row p-3">
            <div class=" bg-white col-sm-10  ml-auto mr-auto"><br>
                <form class="form-inline justify-content-center">
                    <table cellpadding="2" width="20%" bgcolor="99FFFF" align="center" cellspacing="2">

                        <tr>
                            <td>Student ID</td>
                            <td class="p-2"><select name=" Student_id ">
<option value="-1 " selected>select..</option>
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
                            <td> Course</td>
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
                            <td class="p-2"> <input type="number"  name="Tength"  min="1" max="100" step="1" value="1"></td>
                            <td> %_+2 </td>
                            <td class="p-2"> <input type="number"  name="Twelve"  min="1" max="100" step="1" value="1"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td class="p-2"><input type="text" name="Address"></td>
                        </tr>
                        <tr>
                            <td>Contact_No</td>
                            <td class="p-2"><input type="text" name="contact"></td>
                            <td>E-mail</td>
                            <td class="p-2"><input type="text" name="E-mail"></td>
                        </tr>
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
                            <td>Gender</td>
                            <td><input type="radio" name="Gender" value="Male" size="10">Male
                                <input type="radio" name="Gender" value="Female" size="10">Female</td>
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
                            <td>Acad. Year</td>
                            <td class="p-2"><select name=" Year ">
<option value="-1 " selected>select..</option>
<option value="2014" selected>2014</option>
<option value="2015" selected>2015</option>
<option value="2016 " selected>2016</option>
<option value="2017 " selected>2017</option>

</select></td>
                        </tr>
                    </table>
                </form><br>
                <button type="button" name="Update" class="btn btn-info mb-3 mr-5">Update</button>
                <button type="button" name="Delete" class="btn btn-info mb-3">Delete</button><br>
              <a href="stufee.php">    <button type="button" name="Fee" class="btn btn-success mb-3">Stu. Fee Record</button></a>
            </div>
        </div>
        <br>
    </div>


<?php
include "includes/footer.php";
?>
