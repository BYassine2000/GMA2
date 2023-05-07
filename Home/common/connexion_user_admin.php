<?php
$Email=$password="";
$EmailError=$passwordError="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Email=$_POST['mail'];
$password=$_POST['passe'];
}
if(!ismail($Email)){
  $EmailError="c'est pas une adresse mail";
}
  
function ismail($mail){
  return filter_var($mail, FILTER_VALIDATE_EMAIL);
}
if(!ispassword($password)){               
$passwordError = "mot de passe incorrect";
 }
function ispassword($password){
  filter_var($password,
  FILTER_VALIDATE_REGEXP,
  array( "options"=> array( "regexp" => "/.{6,25}/"))
);

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
    
    #A{
        background:orange;
        width: 70%;
        height:500px;
        margin-top: 75px;

    }
    input{
        position: relative;
        top:50px;
    }
#B{
    position: relative;
    bottom:800px;

}
#F{
    background:white;
    width:50%;
    height: 400px;
    position: relative;
     top:40px;
        border-radius: 15px;
}
span{
    margin-right:20px;
}



</style>
</head>
<body>

<center>
 <div id="A">
 <form method="POST" action="<?php echo ['PHP_SELF']?> " id="F">
 
   <div class="col-md-6">

      <input type="text" name="mail" placeholder="Email address" class="form-control" value="<?php echo $Email?>
      "> 
      <br><br>
     <i> <p style="color:red" > <?php echo $EmailError;?></p></i>
   </div> 
   
    <div class="col-md-6">
      <input type="text" name="passe" placeholder="Password" class="form-control" value="<?php echo $password?>"> 
       <br><br>
     <i> <p><?php echo $passwordError;?></p></i>
   </div>  
   
     <span> <input type="checkbox" class="btn btn-primary" id="B">Remember me</span>
        <span style="color:blue">Forgot password?</span>



  
    <div class="col-md-6">
      <input type="submit" value="SIGN IN"  class="btn btn-primary"> 
      <p></p>
   </div>  


 </form>
</div>
</center>
</body>
</html>  