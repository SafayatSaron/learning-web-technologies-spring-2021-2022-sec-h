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
	<td> <b>5b.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>Degree</legend>
	  <tr>
		 <td>
						<input type="checkbox" name="" value="">SSC
						<input type="checkbox" name="" value="">HSC
						<input type="checkbox" name="" value="">BSc
						<input type="checkbox" name="" value="">MSc <br>
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