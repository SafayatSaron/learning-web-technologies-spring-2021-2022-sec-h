<?php 

   $nerror = "";
	
   if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['DOB'] == null){
			$nerror  = "invalid dob...";
		}else{
			echo "success"; 
		}
	}	

		
		

?>

<html>

<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#"> 
	<td> <b>3b.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>DOB</legend>
	  <tr>
		  <td><input type="text" name="DOB" value="" /> </td>
		  
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