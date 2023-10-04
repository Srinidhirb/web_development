<?php
include("config.php");
?>
<?php 
      if(isset($_post['Log In'])){
		$username=$post['username'];
		$password=$_post['password'];
		$res=mysqli_query($mysqli,"INSERT into bank values('','$username','$password')");
		if($res){
			echo"success";
		} 
		else{
			echo"failed";
		}
	}
	?>