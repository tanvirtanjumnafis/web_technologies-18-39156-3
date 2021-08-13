<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if($username == "" || $password == "" || $email == ""){
			echo "null value found...";
		}else{
			$user = [	
						'username'	=> $username, 
						'password'	=> $password, 
						'email'		=>$email, 
						'type'		=>'user'
					];
				
			$status = updateUser($user);				

			if($status){
				header('location: ../view/user_list.php');
			}else{
				echo "error..try again";
			}
		}
	}


?>