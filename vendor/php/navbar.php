<head>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Poiret+One|Tajawal|Pirata+One" rel="stylesheet">
 		<link rel="stylesheet" type="text/css" href="bootstrap/css/abcde.css">
</head>
<nav class="navbar navbar-default" role="navigation" style="background-color: transparent;border: 0px transparent;">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <!-- <div class="navbar-header">
    <button class="btn btn-primary">
    <a href="php/signout.php" type="button" class="btn btn-primary" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="width: 85px;height: 50px;">Sign Out</a>
   <!-- <a href="php/signout.php" type="button" class="btn btn-primary" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="width: 85px;height: 50px;">contac</a>
    <a href="php/signout.php" type="button" class="btn btn-primary" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="width: 85px;height: 50px;">Others</a>
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> 
    </button> 
    <!-- <a class="navbar-brand" href="./"><b>ICECOFFE</b></a> -->
   <!--  <h4 class="eur" style="color: black;margin-top:2px;font-family: 'Tajawal', cursive;font-size: 60px;">Low Cost Market 
    </h4> -->
 <!-- </div>  -->

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav" style="margin-top:19px;margin-left: 10px;">
      <?php if(!isset($_SESSION["user_id"])):?><!--
      <li><a href="./signupForm.php">Sign Up</a></li>
      <li><a href="./login.php">Sign In</a></li> -->
      <li style="margin-left: 10px;"><a href="signupForm.php" class="btn btn-primary" style="margin-left: 8px;margin-right: 5px;color: ghostwhite;">Sign Up</a></li>
      <li><a href="final/4/login.php" class="btn btn-primary" style="color: white;color:hover: red;">Sign In</a></li>
    <?php else:?>
      <li><a href="./php/signout.php" class="btn btn-primary" style="margin-left: 8px;margin-right: 5px;color: ghostwhite;">Sign Out</a></li>
    <?php endif;?>
    </ul>

  </div><!-- NewOne -->
</div>
</nav>