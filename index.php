<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
</head>
<body>
  

<style>
  body, html {
  height: 100%;
  background-image: url("assets/loginbg.jpg");
  height: 100%; 
  background-repeat: no-repeat;
  background-size: cover;
  padding: 10px;


}

.loginbox{
width: 320px;
height: 420px;
background-color: #2196F3;
color: #fff;
top: 50%;
left: 50%;
position: absolute; 
 transform: translate(-50%,-50%); 
box-sizing: border-box;
padding: 70px 30px;
border-radius: 10px;

}


.loginbox:hover {  
width: 322px;
height: 422px;
}

.avatar{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}
  h1 {
margin-top: 10px;
padding: 0;
text-align: center;
font-size: 22 px;
color: #fff;
       }




.loginbox input[type="text"], .loginbox input[type="password"]
 {
   border: 0;
   border: 2px solid #fff;
   background:white;
   transition: 0.25s;
   height: 40px;
   color: black;
   font-size: 16px;
   border-radius: 24px;
   outline: none;
   margin: 20px auto; 
   display: block;
   width: 200px;
   padding: 8px 6px;
  }
  
.loginbox input[type="text"]:focus, .loginbox input[type="password"]:focus
 {
width: 280px;
border-color: #fff;


}
.loginbox input[type="submit"]
{
 border: 0;
   background: #25D366;
   transition: 0.25s;
   height: 40px;
   color: #fff;
   font-size: 16px;
   border-radius: 24px;
   outline: none;
   margin: 20px auto; 
   display: block;
   width: 100px;
   padding: 14px 5px;
   cursor: pointer;
}


.loginbox input{
  width: 100%;
  margin-bottom: 20px;
}

   .loginbox input[type="submit"]:hover
     {
cursor: pointer;
color: white;
background: #32CD32;
width: 200px;
     }

.box
{
width: 300px;
padding: 40px;
position: relative;
top: 40%;
left: 50%;
transform: translate(-50%,-50%);
}


 </style>

<body><center>
<div class="bg-image">
  <div class="loginbox">
  <img src="a4.jpg" class="avatar">
    <h1>Login Here</h1>
    <form class="box"  action="processlog.php" method="post"> 
       <input type="text" name="username" placeholder="hint : junaid" required="">    
       <input type="password" name="password" placeholder="hint : 12345" required="">
       <input type="submit" name="" value="Login">  
    </form>
</div>
</div>



