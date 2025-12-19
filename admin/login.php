<?php
session_start();
if($_POST){
  if($_POST["u"]==="admin" && $_POST["p"]==="admin123"){
    $_SESSION["admin"]=true;
    header("Location: dashboard.php");
    exit;
  }
}
?>
<form method="post">
  <h2>Admin Login</h2>
  <input name="u" placeholder="Username"><br><br>
  <input name="p" type="password" placeholder="Password"><br><br>
  <button>Login</button>
</form>
