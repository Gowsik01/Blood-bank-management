<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        body{
            font-family: "Poppins", sans-serif;
            background-color: cornflowerblue;
        }
        table, th, td{
            border: 1px solid black;
        }
        .cont{
            background-color:white;
            box-sizing: border-box;
            border-style: groove;
            border-color: rgb(139, 125, 125);
            position: relative;
            width: 900px;
            height: 800px;
            margin-top: 30px;
            justify-content: center;
            align-items: center;
            margin-left: 200px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
          
        }
    </style>
</head>
<body>
    <div class="cont">

    
    <table style="width: 100%;">
    <tr>
        <th>Hospital Name</th>
        <th>Location</th>
        <th>Contact Number</th>
        <th>
            O+ve
        </th>
        <th>O-ve</th>
        <th>A+ve</th>
        <th>A-ve</th>
        <th>B+ve</th>
        <th>B-ve</th>
        <th>AB+ve</th>
        <th>AB-ve</th>
    </tr>
    <?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$location = $_POST['location'];
$area = $_POST['area'];



  $con=mysqli_connect("localhost","root","","bloodmanagement");
    $query="select * from signup WHERE location='".$location."' AND area='".$area."'  ";
    $res=mysqli_query($con,$query);
   while($rows = mysqli_fetch_assoc($res))
   {

            echo "<tr>"; 
                
                echo "<td>".$rows['hosname']."</td>";
                echo "<td>".$rows['location']."</td>"; 
                echo "<td>".$rows['phone']."</td>"; 
                echo "<td>".$rows['Opos']."</td>"; 
                echo "<td>".$rows['Oneg']."</td>"; 
                echo "<td>".$rows['Apos']."</td>"; 

                echo "<td>".$rows['Aneg']."</td>"; 
                echo "<td>".$rows['Bpos']."</td>"; 
                echo "<td>".$rows['Bneg']."</td>"; 
                echo "<td>".$rows['ABpos']."</td>"; 

                echo "<td>".$rows['ABneg']."</td>";
  
    }
}

  
      
         

      
   


?>
    </table>
</div>
    </body>
</body>
</html>