<?php 

    if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['Name'] == null){
			echo "invalid username...";
		}else{
			echo "success";
		}
	}
		
		

?>