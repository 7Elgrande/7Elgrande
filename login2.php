

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styleLogin.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
  <style type="text/css">
    <div class="container register" style="border-radius: 15px;">
  <style type="text/css">
      a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  border-radius: 15px;
}

a:hover {
  background-color: #ddd;
  color: black;
  text-decoration: none;
}

.previous {
  background-color: #f1f1f1;
  color: black;
  text-decoration: none;
  border: 1px solid;
  border-radius: 5px;
  padding: 2px;
}
  </style>
<div class="center">
  <span><a href="index.html" class="previous " >Retour</a></span>
  <h1>Login</h1>
  <form method="post" action="loginVerification.php">
    <div class="txt_field">
      <input type="text" name="login" required>
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="password" name="pass" required>
      <label>Password</label>
    </div>
    <input type="submit" name="sub" value="send">
  </form>
</div>



</body>
</html>