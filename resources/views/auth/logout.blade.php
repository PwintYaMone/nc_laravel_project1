<?php 

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northern City </title>
    <<link href="{{asset('front_template/css/loginStyle.css')}}" rel="stylesheet" />
 <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="{{asset('front_template/css/bootstrap.css')}}" />
 <!-- Custom styles for this template -->
 <link href="{{asset('front_template/css/style.css')}}" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->


  <!-- responsive style -->
  <link href="{{asset('front_template/css/all.min.css')}}" rel="stylesheet" />
  <link href="{{asset('fontawesome/css/all.min.css')}}" rel="stylesheet" />
  <script src="{{asset('fontawesome/js/all.min.js')}}"></script>

</head>
<body>
<div class="container-fluid text-white text-center bg-primary p-4 mb-4 mt-4">
        <h1> Shopping cart(Logout Page) </h1> 
    </div>

  
    
    <div class="container text-center">
   
       <div class="alert alert-info">
           <h1>successfully Logout!</h1>
           <hr>
           Login Again ? <a href="index.php">Click Here</a>
       </div>
    </div>
</body>
</html>

       