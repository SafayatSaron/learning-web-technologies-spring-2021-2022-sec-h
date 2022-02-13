<?php 

   $nerror = "";
   $Email = "";
	
   if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['Email'] == null){
			$nerror  = "invalid email...";
		}else{
			$Email = $_REQUEST['Email'];
		}
	}	

		
		

?>

<html>

<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#"> 
	<td> <b>2c.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>Email</legend>
	  <tr>
		  <td><input type="text" name="Email" value="<?=$Email?>">
		  </td>
		  
       </tr>
       <tr>
       
				<td> <?= $nerror ?> </td>
		   </tr>
       


        </tr>
    <br><h0>------------------------------------</h0><br>
	  <tr>


       <tr>
          <td>
		      <input type="submit" name="submit" value="Submit">
          </td>

	  </tr>

     </form>
     </fieldset>

</body>
</html>