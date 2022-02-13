<?php 

    if(isset($_REQUEST['submit'])){
		
		if($_REQUEST['DOB'] == null){
			echo "invalid dob...";
		}else{
			echo "success";
		}
	}
		
		

?>