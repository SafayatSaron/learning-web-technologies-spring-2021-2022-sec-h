<?php 

   $nerror = "";
	
   if(isset($_REQUEST['submit'])){
			echo "success"; 
		
	}	

		
		

?>

<html>

<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#"> 
	<td> <b>6b.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>Blood Group</legend>
	  <tr>
		  <td>
						<select name="">
							<option value="">A+</option>
							<option value="">O+</option>
							<option value="">B+</option>
							<option value="">B-</option>
							<option value="">O-</option>
						</select>
					</td><br>
		  
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