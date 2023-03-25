<html>
    <head>
        <style>
          .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
            form {
  width: 50%;
  margin: 0 auto;
  text-align: center;
}

label {
  display: inline-block;
  width: 100px;
  text-align: right;
}

input[type="text"], input[type="password"] {
  width: 200px;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

        </style>
    </head>
    <body>
    <form action="login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>
  
  <input type="submit" value="Login">
  <div class="button">
		<p>Click To<a href="registration.php"><input type="none" value="REGISTER HERE"></a></p>
		</div>
		<p>Click <a href="index.html">here</a> to go back to Page 1.</p>
</form>

    </body>
</html>