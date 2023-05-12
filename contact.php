<?php
  include('db.php');
  if(isset($_POST['sub']))
  {
    $n=$_POST['name'];
    $e=$_POST['email'];
    $m=$_POST['message'];
    $q="INSERT INTO contact (name, email, message) VALUES ('$n','$e','$m')";
    $r=mysqli_query($dbc,$q);
    header('Location:home.html');
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
        <h3>Drop a Message</h3>
 
        <div class="lt">
 
          <!-- form starting  -->
          <form class="form-horizontal" method="post" action="contact.php">
            <div class="form-group">
              <div class="col-sm-12">
                <!-- name  -->
                <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""/>
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">
                <!-- email  -->
                <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" />
              </div>
            </div>
 
            <!-- message  -->
            <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message">
            </textarea>
 
            <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND" name="sub"> 
                <i class="fa fa-paper-plane"></i>
              <span class="send-text">SEND</span>
            </button>
          </form>
          <!-- end of form -->
        </div>
      </div>
    </section>
  </body>
</html>


