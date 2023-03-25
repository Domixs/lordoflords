<!DOCTYPE html>
<html>
<head>
	<title>Account Registration</title>
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
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
			font-family: Arial, sans-serif;
		}
		label {
			font-weight: bold;
			margin-bottom: 5px;
		}
		input[type="text"], input[type="email"], input[type="password"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 15px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
	</style>
</head>
<body>
	<form action="#" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Create Account">
		<div class="button">
		<p>Click To<a href="login.php"><input type="none" value="login"></a></p>
		</div>
		<p>Click <a href="index.html">here</a> to go back to Page 1.</p>
	</form>
</body>
</html>
