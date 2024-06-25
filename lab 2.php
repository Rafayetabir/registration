<!DOCTYPE html>
<html>
<body>

<h1> Registration </h1>
 <form>
<table>
<tr>
<td>

<fieldset>
<table>
<legend>General Information</legend>

<tr>  <label for="fname">First <br> name:  </label>

  <p><?php echo $_POST['fname'];?></p>
<br>
  <label for="lname">Last <br> name:</label>
 <p><?php echo $_POST['lname'];?></p>
<br>

 <label for="gender"><br>Gender:</label>
 <p><?php echo $_POST['gender'];?></p>
<br>
<br>
 
 <label for="faname"><br>Father's <br>   name: </label>
 <p><?php echo $_POST['faname'];?></p>
 <br>
 
 <label for="moname"><br>Mother's <br> name:<spacer></label>
  <p><?php echo $_POST['moname'];?></p>
 <br>
 <label for="btype"><br>Blood <br> Group:</label>
 
  <p><?php echo $_POST['btype'];?></p>
  
  <br>
  
  
  <label for="religion"><br>Religion:</label>
  <p><?php echo $_POST['religion'];?></p>
  
  <br>
  

</table>
</fieldset>
</td>
<td>

<fieldset>
<table>
<legend>Contact Information</legend>


  <label for="email"><br>Email:</label>
 <p><?php echo $_POST['email'];?></p>
<br>
 <label for="pnumber"><br>Phone Number:</label>
 <p><?php echo $_POST['pnumber'];?></p>
<br>
 <label for="pnumber"><br>Website:</label>
  <p><?php echo $_POST['pnumber'];?></p>
<br>
<label for="paddress"><br>Address:</label>
<td>
<fieldset>
<table>
<legend>Present Address</legend>
<table>
<tr>
  <p><?php echo $_POST['country'];?></p>
<tr>
 <p><?php echo $_POST['city'];?></p>
  
  </select>
 </tr><br><br>
 <tr>
 <textarea id="address" name="address" rows="10" cols="40" required>City/House no/Road no</textarea>
 </tr><br>
  <tr>
 <p><?php echo $_POST['address'];?></p>
 </tr><br>
</table>
</fieldset>
</td>
 



</table>
</fieldset>
</td>

<td>

<fieldset>
<table>
<legend>Account Information</legend>


  <label for="username"><br>Username:</label>
  <p><?php echo $_POST['username'];?></p>
<br>
 <label for="password"><br>Password:</label>
 <p><?php echo $_POST['password'];?></p>
<br>

 <label for="cpassword"><br>Confirm password:</label>
  <p><?php echo $_POST['cpassword'];?></p>
<br>
   

</table>
</fieldset>
</td>
</tr>
</table>
 
 </form>
 
 
</body>
</html>