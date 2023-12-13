<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM magasin WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($discription)) {
		header("Location: ../update.php?id=$id&error=Email is required");
        }else if (empty($prix)) {
		header("Location: ../update.php?id=$id&error=Email is required");
        }else if (empty($qte)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {

       $sql = "UPDATE magasin
               SET name='$name', discription='$discription' , prix='$prix' , qte='$qte'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}