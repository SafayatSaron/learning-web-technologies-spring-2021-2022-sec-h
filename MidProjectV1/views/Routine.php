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
  <title>Profile</title>
</head>
<body>
  
  Menu
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
      <td width="70%">
        <table width="60%" height="374" border=1 cellspacing="5" bgcolor="white">
    <caption><h2>ROUTINE</h2></caption>
    <tr> </tr>
    <tr>
      <th scope="row"><div align="center">Monday</div></th>
      <td width="110"><div align="center">Data Structure</div>
          <div align="center"></div></td>
      <td width="110"><div align="center">M &amp; A</div></td>
      <td width="5%"><div align="center"><code></code>RE</div></td>
      <td width="110"><div align="center">Mathematics for Computing</div></td>
      <td width="110"><div align="center"></div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">Tuesday</div></th>
      <td><div align="center">Operating System</div></td>
      <td>Graphics and Internet</td>
      <td><div align="center"><code></code></div></td>
      <td><div align="center">M &amp; A</div></td>
      <td><div align="center">Graphics and Internet (LAB)</div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">Wednessday</div></th>
      <td><div align="center">Data Structure</div></td>
      <td><div align="center">Graphics and Internet</div></td>
      <td><div align="center"><code></code>CE</div></td>
      <td><div align="center">Data Structure (LAB)</div></td>
      <td><div align="center">Graphics and Internet (LAB)</div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">Friday</div></th>
      <td><div align="center">Operating System</div></td>
      <td><div align="center">Graphics and Internet</div></td>
      <td width="5%"><div align="center"><code></code></div></td>
      <td><div align="center">Mathematics for Computing</div></td>
      <td><div align="center">M &amp; A</div></td>
    </tr>
    <tr>
      <th scope="row"><div align="center">Saturday</div></th>
      <td><div align="center">Data Structure (LAB)</div></td>
      <td>Data Structure</td>
      <td><div align="center"><code></code>SS</div></td>
      <td><div align="center">Operating System</div></td>
      <td><div align="center">Graphics and Internet (LAB)</div></td>
    </tr>
    <tr></tr>
</table>
</div>
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
