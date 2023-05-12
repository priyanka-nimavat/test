<?php
  include('db.php');
  if(isset($_POST['register']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $query="INSERT INTO users (name, email, password) VALUES ('$name','$email','$pass')";
    $result=mysqli_query($dbc,$query);
    header('Location:contact.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section id="last">
      <!-- heading -->
      <div class="full">
        <h3>Register with us</h3>
 
        <div class="lt">
 
          <!-- form starting  -->
          <form class="form-horizontal" method="post" action="register.php">
            <div class="form-group">
              <div class="col-sm-12">
                <!-- name  -->
                <input type="text" class="form-control" id="name" placeholder="ENTER NAME" name="name" value=""/>
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">
                <!-- email  -->
                <input type="email" class="form-control" id="email" placeholder="ENTER EMAIL" name="email" value="" />
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">
                <!-- email  -->
                <input type="password" class="form-control" id="password" placeholder="ENTER PASSWORD" name="password" value="" />
              </div>
            </div>
 
            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND" name="register"> 
                <i class="fa fa-paper-plane"></i>
              <span class="send-text">REGISTER</span>
            </button>
          </form>
          <!-- end of form -->
        </div>
      </div>
    </section>
  </body>
</html>


