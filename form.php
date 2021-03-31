


<!DOCTYPE html>
<html>
    <head> 
        <title>FORM</title>
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          @import url('https://fonts.googleapis.com/css?family=Roboto');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Roboto', sans-serif;
}

body{
  background: url('baige.jpeg') no-repeat top center;
  background-size: cover;
  height: 100vh;
}

.wrapper{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  max-width: 550px;
  background: rgba(0,0,0,0.8);
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
}

.wrapper .title h1{
  color:#fff;
  text-align: center;
  margin-bottom: 25px;

}

.contact-form{
  display: flex;
 
  
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
}

.input-fields,
.msg{
  width: 48%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #fff;
  padding: 10px;
  color: #fff;
  width: 100%;
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #fff;
}

.btn {
    background: crimson;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
.rating{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%) rotateY(180deg);
  display: flex;
  margin-left: -130px;
  margin-top: -30px;
}
.rating input{
  display: none;
}
.rating label{
  display: block;
  cursor: pointer;
  width: 50px;
  background: #ccc;
}
.rating label:before{
  content: '\f005';
  font-family: fontAwesome;
  position: absolute;
  display: block;
  font-size: 40px;
  color: whitesmoke;
 
}
.rating label:after{
  content: '\f005';
  font-family: fontAwesome;
  position: absolute;
  display: block;
  font-size: 40px;
  color: gold;
  top: 0;
  opacity: 0;
  transition: .5s;
  text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}
.rating label:hover:after,
.rating label:hover~label:after,
.rating input:checked~label:after{
  opacity: 1;
}
        </style>
    </head>
    <body>
      <form action="view.php" method="POST" 
style="border:1px solid #ccc">
        <div class="wrapper">
            <div class="title">
              <h1>REPORT</h1>
            </div>
            <div class="contact-form">
              <div class="input-fields">
                <input type="text" class="input"  name="name" placeholder="Name"> 
                <input type="text" class="input" name="location" placeholder="Location">
                <input type="text" class="input" name="area" placeholder="Area">
                <input type="text" class="input" name="blood" placeholder="Blood Type">
                <button type="Submit" class="btn">Submit</button>>
              <!----  <input type="text" class="input" placeholder="Job title">-->
              
              </div>
              <!--<div class="msg">
               ---- <textarea placeholder="Description"></textarea>--
                <div class="btn">Submit</div>
              </div>-->
            </div>
           <!---- <div class="rating">
              <input type="radio" name="star" id="star1"><label for="star1"></label>
              <input type="radio" name="star" id="star2"><label for="star2"></label>
              <input type="radio" name="star" id="star3"><label for="star3"></label>
              <input type="radio" name="star" id="star4"><label for="star4"></label>
              <input type="radio" name="star" id="star5"><label for="star5"></label>
 
 
          </div>-->
          </div></form>
    </body>
</html>