<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$discription = validate($_POST['discription']);
	$prix = validate($_POST['prix']);
	$qte = validate($_POST['qte']);


	$user_data = 'name='.$name. '&discription='.$discription. '&prix=' .$prix. '&qte='.$qte;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($discription)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($prix)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($qte)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else {

       $sql = "INSERT INTO magasin(name, discription, prix, qte) 
               VALUES('$name', '$discription', '$prix', '$qte')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}