<?php
	session_start();

	//Login process - if login clicked
	if (isset($_POST['submit'])) {

		//Connection
		include_once 'dbh.inc.php';
		//Data from form
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

		//Error handlers

		//Check if inputs are empty
		if (empty($uid) || empty($pwd)) {
			header("Location: ../index.php?login=empty");
			exit();
		}
		else {
			//Check if username exists in the database
			$sql = "SELECT * FROM users WHERE user_uid=?";

			$stmt = mysqli_stmt_init($conn);
			//Check if prepared statement fails
			if(!mysqli_stmt_prepare($stmt, $sql)) {
			    header("Location: ../index.php?login=error");
			    exit();
			}

			else {

				mysqli_stmt_bind_param($stmt, "s", $uid);

				//Run query 
				mysqli_stmt_execute($stmt);

	      $result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					//De-hash password and check
					$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
					//Password incorrect
					if ($hashedPwdCheck == false) {
						header("Location: ../index.php?login=error");
						exit();
					}
					//Password correct
					elseif ($hashedPwdCheck == true) {
						//Log in and set SESSION variables
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];
						header("Location: ../index.php?login=success");
						exit();
					}
	      } else {
	        header("Location: ../index.php?login=error");
				exit();
	      }
			}
		}

		//Close the prepared statement
		mysqli_stmt_close($stmt);

	} else {
		header("Location: ../index.php?login=error");
		exit();
	}
