<html>
<head>
	<title>Login page</title>
</head>
<body>

<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a
					style="background-color: green; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;"  href="login.php"> Login </a> |
					<a
					style="background-color: black; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;"  href="reg.php"> Registration </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td width="30%"></td>
			<td width="40%">
				<form method="POST" action="../controller/loginCheckdb.php">
					<fieldset>
						<legend>Login</legend>
						<table>
							<tr>
								<td>User Type:</td>
								<td width="10"></td>
								<td>
									<input type="radio" name="usertype" value="admin" required>Admin
									<input type="radio" name="usertype" value="teacher">Teacher
									<input type="radio" name="usertype" value="student">Student
									<input type="radio" name="usertype" value="parent">Parent
								</td>
							</tr>
							<tr>
								<td>Username:</td>
								<td></td>
								<td><input type="text" name="username" value=""></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td></td>
								<td><input type="password" name="password" value=""	></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input type="submit" name="submit" value="Submit"></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</td>
			<td width="30%"></td>
		</tr>
	</table>

<!-- Footer -->	
	<hr>
	<table border="0" width="100%" height="50px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>


</body>
</html>