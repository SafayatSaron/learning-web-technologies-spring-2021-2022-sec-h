<?php
	require_once('../controller/headerCookie.php');

	$uname =  $_SESSION['uname'];
	$file = fopen('../model/userAdmin.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[1]) == $uname){
			$userData = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>Add Notice</title>
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
					style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherProfile.php">Profile</a> |
					<a
					style="background-color: red; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="../controller/logout.php"> Logout </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td align="center" width="20%" valign="top">
				<!-- Side menu -->
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a 
							style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a 
							style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherNotice.php">Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a 
							style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherAddNotice.php">Add Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a 
							style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherUsers.php">Users</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a style="background-color: #4CAF50;
 border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="Routine.php">Routine</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a 
							style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" href="teacherAddUser.php">Add User</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="40%">
				<fieldset>
					<legend>Add Notice</legend>
					<form method="POST" action="../controller/addNoticeCheck.php">
						<table>
							<tr>
								<td>Date</td>
								<td>
									<input type="date" name="date" value="">
								</td>
							</tr>
							<tr>
								<td>Title</td>
								<td><input type="text" name="title" value=""></td>
							</tr>
							<tr>
								<td>Details</td>
								<td><input type="text" name="details" value=""></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="Submit"></td>
							</tr>
						</table>
					</form>
				</fieldset>
				<br>
				<fieldset>
					<legend>Upload Notice</legend>
					<form method="POST" action="../controller/fileUploadCheck.php" enctype="multipart/form-data">
						File: <input type="file" name="myfile"> 	
						<input type="submit" name="submit" value="Submit">
					</form>
				</fieldset>
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
