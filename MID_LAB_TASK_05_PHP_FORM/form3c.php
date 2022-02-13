<?php 

   $nerror = "";
   $DOB = "";
	
   if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['DOB'] == null){
			$nerror  = "invalid dob...";
		}else{
			$DOB = $_REQUEST['DOB'];
		}
	}	

		
		

?>

<html>

<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#"> 
	<td> <b>1c.  <br> </td>
	<form method="" action="">
	<fieldset align="center">
		<legend>DOB</legend>
	  <tr>
		  <td><input type="text" name="DOB" value="<?=$DOB?>">
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