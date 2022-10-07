
<?php
require_once("header.php");
session_start();

if(!isset($_SESSION["session_username"])):
header("location:index.php");
else:
?>

    <div class="container" id="protected">
      <div class="title" id="protected">
        Welcome <span><?php echo $_SESSION['session_username'];?>! </span>! You are succesfully log in! 
      </div>
      <div class="login-signup">
              <span class="text">
                <a href="register.html" class="text signup-text">Log out</a>
              </span>
            </div>
    </div>
    <?php 
    endif; 
    ?>
     <?php
    require_once("footer.php");
?>
  
