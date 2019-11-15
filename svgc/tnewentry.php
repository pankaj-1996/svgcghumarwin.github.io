<?php
include "includes/header.php";
?>
  <?php
include "includes/navbar.php";
?>

    <div class="bg-white">
        <h1 class="text-center text-dark"> <b> <i>TEACHER NEW ENTRY </i></b> </h1>
    </div>
    <div class="container   alignfull bg-dark" style="text-align: center;">
        <div class="row p-3">
            <div class=" bg-white col-sm-10  ml-auto mr-auto"><br>
                <form class="form-inline justify-content-center">

                    <table cellpadding="2" width="65%" bgcolor="99FFFF" align="center" cellspacing="2">

                        <tr>
                            <td>Teacher ID</td>
                            <td class="p-2"><select name=" Student_id ">
<option value="-1 " selected>select..</option>
</select></td>
                        </tr>
                        <tr>
                            <td> Name</td>
                            <td class="p-2"> <input type="text" name="Name"></td>
                        </tr>
                        <tr>
                            <td>Father Name</td>
                            <td class="p-2"> <input type="text" name="Fname"></td>
                        </tr>
                        <tr>
                            <td>DOB</td>
                            <td class="p-2"> <input type="date" name="Dob"></td>
                        </tr>
                        <tr>
                            <td>Permanent Address</td>
                            <td class="p-2"> <input type="textarea"  name="Address"></td>
                        </tr>
                          <tr>
                            <td>Gender</td>
                            <td><input class="mr-1" type="radio" name="Gender" value="Male" size="10">Male
                                <input class="ml-4 mr-1" type="radio" name="Gender" value="Female" size="10">Female</td>
                        </tr>
<tr>
                            <td>Contact No</td>
                            <td class="p-2"> <input type="text" name="Contact"></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td class="p-2"> <input type="text" name="Email"></td>
                        </tr>
                         <tr>
                            <td>Qualification</td>
                            <td class="p-2"> <input type="text" name="Qualification"></td>
                        </tr>
  <tr>
                            <td>Experience</td>
                            <td class="p-2"> <input type="text"  name="Experience"></td>
                        </tr>
                        <tr>
                            <td>Married Status</td>
                            <td><input class="mr-1" type="radio" name="Gender" value="Married" size="10">Married 
                                <input class="ml-3 mr-1" type="radio" name="Gender" value="Unmarried" size="10">Unmarried</td>
                        </tr>
<tr class="text-primary" > <td class="pt-4" style="text-align:right";><h2><b> Salary</b></h2></td></tr>
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
            

</table>
</form> <br>
<button type="button" name="Submit" class="btn btn-info mb-3 mr-5" style="height:40px;width:150px">Submit</button>
                <button type="button" name="Calculate" class="btn btn-info mb-3" style="height:40px;width:150px">Calculate Salary</button><br>
</div>
</div><br>
</div>

<?php
include "includes/footer.php";
?>
