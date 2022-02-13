<?php 

   $nerror = "";
   $Name = "";
	
   if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['Name'] == null){
			$nerror  = "invalid name...";
		}else{
			$Name = $_REQUEST['Name'];
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
		<legend>Name</legend>
	  <tr>
		  <td><input type="text" name="Name" value="<?=$Name?>">
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