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
    
    background: url('report.jpeg') no-repeat top center;
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
    height: 440px;
    margin-top: 30px;
    justify-content: center;
    align-items: center;
    margin-left: 400px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    border-radius: 20px;
}
.box .title{
    text-align: center;
    
  background: -webkit-linear-gradient(rgb(75, 38, 241),rgb(37, 12, 95));
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
   
    background: #fff;
    z-index: -1;
}
.box:after{
    content: '';
    position: absolute;
    
    left: -2px;
    right: -2px;
    
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
                <h1>VIEW INVENTORY</h1>
            </div>
            
        </div>
        <div class="content">
            <h4>
                   <!-- PHP CODE TO FETCH DATA FROM ROWS--> 
            <?php   // LOOP TILL END OF DATA 
                
                session_start();
                $con=mysqli_connect("localhost","root","","bloodmanagement");
                $query="select * from signup WHERE eurl='".$_SESSION['eurl']."'";
                $res=mysqli_query($con,$query);
                while($rows = mysqli_fetch_assoc($res)){
                
                
                 
                 
                            
                    


            echo "<tr>"; 
                
                echo "HOSPITAL NAME:".$rows['hosname']."<br>"; 
                echo "Email:".$rows['eurl']."<br>"; 
                echo "O+VE:   ".$rows['Opos']."<br>"; 
                echo "O-VE:   ".$rows['Oneg']."<br>"; 
                echo "A+VE:   ".$rows['Apos']."<br>"; 
                echo "A-VE:   ".$rows['Aneg']."<br>"; 
                echo "B+VE:   ".$rows['Bpos']."<br>"; 
                echo "B-VE:   ".$rows['Bneg']."<br>"; 
                echo "AB+VE:  ".$rows['ABpos']."<br>"; 
                echo "AB-VE:  ".$rows['ABneg']."<br>"; 
            echo"<hr>";
                

                
            echo "</tr>";
            }
                
                
            
             ?>
                 
                
            </h4>
        </div><form action="about1.php">
                <button type="submit" class="signupbtn" style="margin-right: 16px" onclick=>Back</button>
              </form>
    </div>
    
    
</body>
</html>