<?php
session_start();
$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$password = $_POST['psw'];
$_SESSION["eurl"] =$_POST['email'] ;


  $con=mysqli_connect("localhost","root","","bloodmanagement");
    $query="select * from signup";
    $res=mysqli_query($con,$query);
    if(mysqli_num_rows($res)>=0){
      while($row = mysqli_fetch_assoc($res))
      {
         if($_SESSION["eurl"]==$row['eurl'] && $password==$row['psw']){
          header("location:about1.php");
         
   }
   else{
          header("location:form.php");
         
}
      }
   

}
}?>
<!DOCTYPE html>
<html>
    <head> 
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          @import url('https://fonts.googleapis.com/css?family=Roboto');

body {font-family: Arial, Helvetica, sans-serif;
  
    background:url('holdinghands.jpeg') no-repeat top center;
    background-size: cover;
    height: 100vh;
  
}
* {box-sizing: border-box}
.clearfix{
  padding-left: 100px;
  margin-left: 366px;
  margin-top: -20px;
}
.clearfix .right{
  margin-left: 10px;
}

.container{
  padding-left: 100px;
  margin-left: 450px;
  margin-top: -30px;
}
.mdiv{
   display: block;
   margin: 200px;
   margin-top: -5px;
   margin-bottom: -5px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
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
  width: 24.5%;
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
  width: 24.5%;
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
@media screen and (max-width: 600px) {
  .cancelbtn, .signupbtn {
     width: 24.5%;
  }
}


.cta {
	display: inline-block;
	padding: 10px 30px;
	color: white;
	background-color: transparent;
	border: 2px solid crimson;
	font-size: 2rem;
	text-transform: uppercase;
	letter-spacing: .1rem;
	margin-top: 30px;
	transition: .3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: crimson;
}

        </style>
        <!--<link rel="stylesheet" href="Signin.css">-->
        
    </head>
    <body><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" 
style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign In</h1>
            
            
        
            <label for="email"><b>Email</b></label>
            <br>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <br>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>
           <!---- <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>-->
            
           <!----<label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>-->
            
           <!---- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
           -->
          </div>
            <div class="clearfix">
              <button type="submit" class="cancelbtn" >Sign In</button>
              </form>
              <form action="signup.php">
                <button type="submit" class="signupbtn" style="margin-right: 16px" onclick=>Register</button>
              </form>
              
             
              
            </div>
            
         
    
    </body>
</html>