<?php 
	require_once('../controller/headerCookie.php');
	$uname =  $_SESSION['uname'];
?>

<html>
<head>
	<title>Home Page</title>
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
		<tr valign="top">
			<td align="center" width="20%">
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a style="background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;"
							 href="teacherHome.php">Home</a>
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
  font-size: 16px;" href="teacherNotice.php">Notice</a>
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
							<a style="background-color: #4CAF50; 
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
			<td width="70%">
				<table border="1" width="80%">
					<tr>
						<td align="center" width="100px"><b>Date</b></td>
						<td align="center" width="200px"><b>Title</b></td>
						<td align="center"><b>Details</b></td>
						<td align="center" width="100px"><b>Action</b></td>
					</tr>
<!--Show Notice--------------------------------------------------------------->
					<?php 
						$file = fopen('../model/notice.txt', 'r');
						while(!feof($file)){
							$f = fgets($file);
							if ($f!=null) {
								$notice = explode('|', $f);
					?>
					<tr>
						<td align="center" width="100px"><?=$notice[0]?></td>
						<td align="center" width="200px"><?=$notice[1]?></td>
						<td align="center"><?=$notice[2]?></td>
						<td align="center" width="100px"><a href="../controller/teacherNoticeDelete.php?date=<?=$notice[0]?>">Delete</a></td>
					</tr>
					<?php
							}
						}
						fclose($file);
					?>
				</table>
			</td>
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
