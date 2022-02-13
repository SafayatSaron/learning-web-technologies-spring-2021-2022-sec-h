<?php 

    if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['Email'] == null){
			echo "invalid email...";
		}else{
			echo "success";
		}
	}
		
		

?>