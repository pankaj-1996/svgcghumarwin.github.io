<?php
include "includes/header.php";
?>
  <?php
include "includes/navbar.php";
?>

    <div class="bg-white">
        <h1 class="text-center text-dark"><b> <i>Student Fee Record </i></b></h1>
    </div>
    <div class="container   alignfull bg-dark" style="text-align: center;">
        <div class="row p-3">
            <div class=" bg-white col-sm-10  ml-auto mr-auto"><br>
                <form class="form-inline justify-content-center">
                    <table cellpadding="2" width="65%" bgcolor="99FFFF" align="center" cellspacing="2">

                        <tr>
                            <td>Student ID</td>
                            <td class="p-2"><select name=" Student_id ">
<option value="-1 " selected>select..</option>
</select></td>
</tr>
<tr>
      <td>Academic Year</td>
                            <td class="p-2"><select name=" Year ">
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
                            <tr>
                            <td>Father Name</td>
                            <td class="p-2"> <input type="text" name="Fathername"></td>
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
                            <td>Year/Sem</td>
                            <td class="p-2"><select name=" Year ">
<option value="-1 " selected>select..</option>
<option value="1st " selected>1st</option>
<option value="2nd" selected>2nd</option>
<option value="3rd " selected>3rd</option>
<option value="4th " selected>4th</option>
<option value="5th " selected>5th</option>
<option value="6th " selected>6th</option>
</select></td></tr>
 <tr>
                            <td>Fee Amount</td>
                            <td class="p-2"> <input type="text" name="Feeamt"></td>
                        </tr>
                         <tr>
                            <td>Tuition Fee</td>
                            <td class="p-2"> <input type="text" name="Tuifee"></td>
                        </tr>
                         <tr>
                            <td>Total Fee</td>
                            <td class="p-2"> <input type="text" name="Total"></td>
                        </tr>

</table>
</form><br>
 <button type="button" name="Update" class="btn btn-info mb-3 mr-5">Update</button>
                <button type="button" name="Add" class="btn btn-info mr-5 mb-3">Add</button>
                <button type="button" name="Delete" class="btn btn-info mb-3">Delete</button>
</div>
</div>
<br>
</div>

<?php
include "includes/footer.php";
?>
