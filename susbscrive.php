<?php

 require_once('config.php');
 if(isset($_POST['subscrive'])){

  $name = $_POST['name'];
  $email = $_POST['mail'];
  $role =$_POST['activity'];


  $insert = mysqli_query($connection,"INSERT INTO subs (name,email,role) VALUES('$name','$email','$role')");

  if($insert=== TRUE){
    echo '<script>jQuery(".overlay").hide():</script>';
  }
 }
 


?>



<div class="subscrive">
  <form action="" method="POST">

  <div class="container">
    <a href="#" class="exit"><i class="fa fa-window-close" aria-hidden="true"></i></a>
    <h2>Subscribe to our Newsletter </h2>
    <p>From Here you can know our lates update and promotions.</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required >
    <input type="text" placeholder="Email address" name="mail" required >
    <input type="checkbox" checked="checked" name="activity"> Daily Newsletter
  </div>

  <div class="container">
    <input type="submit" value="Subscribe" name="subscrive" class="btn-primary">
  </div>
</form>
</div>

</body>
</html>
