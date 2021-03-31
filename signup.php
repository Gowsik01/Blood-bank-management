<?php

$password="";
$pswrepeat="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$password = $_POST['psw'];
$repassword = $_POST['psw-repeat'];
$location = $_POST['location'];
$area = $_POST['area'];
$eurl = $_POST['eurl'];
$phone = $_POST['phone'];
$hosname = $_POST['hosp-name'];
$opos = $_POST['op'];
$oneg = $_POST['on'];
$apos = $_POST['ap'];
$aneg = $_POST['an'];
$bpos = $_POST['bp'];
$bneg = $_POST['bn'];
$abpos = $_POST['abp'];
$abneg = $_POST['abn'];



  $con=mysqli_connect("localhost","root","","bloodmanagement");
    $query="select * from signup";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>=0){
    
    $query="INSERT INTO signup(hosname,psw,pswrepeat,location,area,eurl,phone,Opos,Oneg,Apos,Aneg,Bpos,Bneg,ABpos,ABneg) values('$hosname','$password','$repassword','$location','$area','$eurl','$phone','$opos','$oneg','$apos','$aneg','$bpos','$bneg','$abpos','$abneg')";
    $res=mysqli_query($con,$query);
    echo '<script>alert("Login successfull")</script>';

         
    

  
}
else{
  echo"Not created";
}
}?>
<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

.mdiv{
   display: block;
   margin: 200px;
   margin-top: -5px;
   margin-bottom: -5px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
 
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
    <div class="mdiv">
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" 
style="border:1px solid #ccc">
            <div class="container">
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="hosp-name"><b>Hospital Name</b></label>
              <input type="text" placeholder="Enter Hospital Name" name="hosp-name" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

              <label for="location"><b>Location</b></label>
              <input type="text" placeholder="Enter Location" name="location" required>
              
              <label for="area"><b>Area</b></label>
              <input type="text" placeholder="Enter Area" name="area" required>

              <label for="eurl"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="eurl" required>

              <label for="phone"><b>Contact Number</b></label>
              <input type="number" placeholder="Enter Contact Number" name="phone" required>



             <label for="op"><b>Blood Available<br>O+</b></label>
              <input type="number" placeholder="Enter litres" name="op" required>
              
              <label for="on"><b>O-</b></label>
              <input type="number" placeholder="Enter litres" name="on" required>

              <label for="ap"><b>A+</b></label>
              <input type="number" placeholder="Enter litres" name="ap" required>

              <label for="an"><b>A-</b></label>
              <input type="number" placeholder="Enter litres" name="an" required>

              <label for="bp"><b>B+</b></label>
              <input type="number" placeholder="Enter litres" name="bp" required>

              <label for="bn"><b>B-</b></label>
              <input type="number" placeholder="Enter litres" name="bn" required>

              <label for="abp"><b>AB+</b></label>
              <input type="number" placeholder="Enter litres" name="abp" required>

              <label for="abn"><b>AB-</b></label>
              <input type="number" placeholder="Enter litres" name="abn" required>
              
              <br>
              <br>
              
              
              


              
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
              
              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
              <div class="clearfix">
                
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div> </form>
            <form action="signin.php">
                <button type="submit" class="cancelbtn">Cancel</button></form>
         
    </div>


</body>
</html>