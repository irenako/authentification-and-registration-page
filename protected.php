
<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:index.php");
else:
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css"
    />
    <title>Protected page </title>
    <style>
      .container {
        text-align: center;
        padding: 30px 20px;
      }
      .title {
        padding-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="title">
        Welcome <span><?php echo $_SESSION['session_username'];?>! </span>! You are succesfully log in! 
      </div>
      <div class="login-signup">
              <span class="text">
                <a href="register.html" class="text signup-text">Log out</a>
              </span>
            </div>
    </div>
    <?php endif; ?>
  </body>
</html>