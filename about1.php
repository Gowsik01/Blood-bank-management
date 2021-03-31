<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
$opos = $_POST['opos'];
$oneg = $_POST['oneg'];
$apos = $_POST['apos'];
$aneg = $_POST['aneg'];
$bpos = $_POST['bpos'];
$bneg = $_POST['bneg'];
$abpos = $_POST['abpos'];
$abneg = $_POST['abneg'];




  $con=mysqli_connect("localhost","root","","bloodmanagement");
  $query="select * from signup WHERE eurl='".$_SESSION['eurl']."'";
  $res=mysqli_query($con,$query);
    
      while($row = mysqli_fetch_assoc($res)){

            $op=$row['Opos'];
            $on=$row['Oneg'];
            $ap=$row['Apos'];
            $an=$row['Aneg'];
            $bp=$row['Bpos'];
            $bn=$row['Bneg'];
            $abp=$row['ABpos'];
            $abn=$row['ABneg'];
      
    
    }


 
 


 $opo=$op+$opos ;
      $one=$on+$oneg;
      $apo=$ap+$apos;
      $ane=$an+$aneg;
      $bpo=$bp+$bpos;
      $bne=$bn+$bneg;
      $abpo=$abp+ $abpos;
      $abne=$abn+$abneg;

  $query="UPDATE signup SET Opos='$opo',Oneg='$one',Apos='$apo',Aneg='$ane',Bpos='$bpo',Bneg='$bne',ABpos='$abpo',ABneg='$abne' WHERE eurl='".$_SESSION['eurl']."'";
   if(mysqli_query($con,$query)){
      header("location:about1.php");
      }
   else{
          
           header("location:form.php");
}
      }
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>About Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;

}
body{
   
    background: url('help.jpeg') no-repeat top center;
  background-size: cover;
  height: 100vh;


}
.cta {
	display: inline-block;
	padding: 10px ;
	color: rgb(22, 20, 20);
	background-color: transparent;
	border: 1px solid crimson;
	
	text-transform: uppercase;
	letter-spacing: .1rem;
	
	transition: .3s ease;
	transition-property: background-color, color;
}
.cta:hover {
	color: white;
	background-color: crimson;
}
.box{
    background-color:white;
    box-sizing: border-box;
    border-style: groove;
    border-color: rgb(139, 125, 125);
    position: relative;
    width: 500px;
    height: 400px;
    margin-top: 70px;
    justify-content: center;
    align-items: center;
    margin-left: 400px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    border-radius: 20px;
}
.box .title{
    text-align: center;
    
  background: -webkit-linear-gradient(rgb(240, 113, 138),crimson);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    text-shadow: rgb(212, 211, 211);
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 5px;
    font-size: 20px;
}
.box .content{
    margin-top: 25px;
    padding-left: 40px;
    padding-bottom: 25px;
}
.box .content span{
    font-weight: lighter;
}
.box .content .ind{
    padding-top: 15px;
}
.box:before{
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: #fff;
    z-index: -1;
}
.box:after{
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: #fff;
    z-index: -1;
    filter: blur(40px);
}
.box:before,.box:after{
    background: linear-gradient(235 deg,#89ff00,#060c21,#060c21,#00bcd4);
}
.wel{
    font-size: 50px;
    margin-left: 20px;
}
    </style>
</head>
<body>
    <H1>
        <div class="wel">
            Welcome !
        </div>
       
    </H1>
    <div class="box">
        <div class="title">
            <div class="text">
                <h1>MANAGE INVENTORY</h1>
            </div>
            
        </div>
        <div class="content">
            <h4>
               <!---- <div class="ind">
                     : <span>Poojaa</span> <br>
                </div>
                <div class="ind">
                    Email : <span>1874j@skcet.ac.in</span>  <br>
                </div>
                <div class="ind">
                    Phone : <span>1987387439</span> <br>
                </div>
                <div class="ind">
                    Location : <span>Salem</span> <br>
                </div>
                <div class="ind">
                    Description : <span>I love icecream</span><br>
                </div>-->
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                <div class="input-fields">

                    <label for="op"><b>Blood Bank<br>O+</b></label>
                    <input type="number" placeholder="Enter litres" name="opos" >
                    
                    <label for="on"><b>O-</b></label>
                    <input type="number" placeholder="Enter litres" name="oneg" >
                    <br>
                    <label for="ap"><b>A+</b></label>
                    <input type="number" placeholder="Enter litres" name="apos" >
      
                    <label for="an"><b>A-</b></label>
                    <input type="number" placeholder="Enter litres" name="aneg" >
                    <br>
                    <label for="bp"><b>B+</b></label>
                    <input type="number" placeholder="Enter litres" name="bpos" >
      
                    <label for="bn"><b>B-</b></label>
                    <input type="number" placeholder="Enter litres" name="bneg" >
                    <br>
                    <label for="abp"><b>AB+</b></label>
                    <input type="number" placeholder="Enter litres" name="abpos" >
      
                    <label for="abn"><b>AB-</b></label>
                    <input type="number" placeholder="Enter litres" name="abneg" >
                    <br>

                    <div class="clearfix">
                        
                        <button type="submit" class="signupbtn">Update</button></form>
                    </div><form action="firstpage2.php">
                <button type="submit" class="signupbtn" style="margin-right: 16px" onclick=>Back</button>
              </form>
                    <br>
                    <a href="Inventory.php" type="button" class="cta">View Inventory</a>

                  <!----  <input type="text" class="input" placeholder="Job title">-->
                  
                  </div>
                
            </h4>
        </div>
    </div>
    
    
</body>
</html>