<html>
<head>
  <title>Login Page</title>
  <style type="text/css">
    div.container {
      border: 3px solid #01f1f1;
      padding: 6px;
      width:300px;
      margin:20px auto;
      text-align:center;
      float: left;  
    }
    .login { 
      background:#f9f9f9; 
    }
    .login div {
      border:2px solid #fff;
      padding:3px;
    }
    .register { 
      background:#f9f9f9; 
    }
    .register div {
      border:2px solid #fff;
      padding:3px;
    }
    input[type=text], input[type=password] {
      padding: 6px 15px;
      margin: 8px 0;
      border: 1px solid #ccc;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 6px 15px;
      margin: 8px 0;
      width: 50%;
    }
body{
background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqofJGFs2MigMwTxLte7U5vUo3NxNR0FsYiIqE4UZj4Z3NbYiJ");
}
  </style>
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
  <div class="grad"></div>
  		
  <br>
  <div class="login">
	<form class="form-login" method="post" action="./task_list/index.php">
        <input type="text" placeholder="E-mail" name="email"><br>
	<input type="password" placeholder="password" name="password"><br>
	<input type ="hidden" name="action" value="test_user">
        <input type="submit" value="Login" name="submit">
	</form>
	<form class="form-login" method="post" action="register.php">
	<input type="submit" value="Sign-Up" name="submit">
	</form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>