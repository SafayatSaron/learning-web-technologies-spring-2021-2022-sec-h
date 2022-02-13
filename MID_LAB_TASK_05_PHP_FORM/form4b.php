<?php 

   $nerror = "";
	
   if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['Gender'] == null){
			$nerror  = "invalid gender...";
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
	<td> <b>4b.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>Gender</legend>
	  <tr>
		  <td>
						<input type="radio" name="Gender" value=""> Male
						<input type="radio" name="Gender" value=""> Female
						<input type="radio" name="Gender" value=""> Other
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