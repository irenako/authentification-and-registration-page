<?php
	session_start();
  require_once("header.php");
	?>

	<?php require_once("includes/connection.php"); ?> 
	<?php
	
	if(isset($_SESSION["session_username"])){
	header("Location: intropage.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysql_query("SELECT * FROM usertbl WHEREusername='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
	 $_SESSION['session_username']=$username;	 
   header("Location: intropag.php");
	}
	} else {

	
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}
	?>

    <div class="container">
      <div class="form">
        <div class="form-login">
          <span class="title">Login</span>
          <div class="input">
            <form action="#">
              <div class="input-field">
                <input type="text" placeholder="Enter your email" class="email" reguired />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-envelope"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"
                  />
                </svg>
              </div>
              <div class="input-field">
                <input type="text" placeholder="Enter your password"  class="password" reguired />
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-key-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                  />
                </svg>
              </div>
              <div class="button">
                <input type="button" value="Log in" required />
              </div>
            </form>
            <div class="login-signup">
              <span class="text">
                Not a member?
                <a href="register.html" class="text signup-text">Sign up</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    require_once("footer.php");
?>

 
