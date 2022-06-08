<?php

//<<<<< KODA UPORABLJENA PRI REGISTRACIJA.PHP >>>>>

//Preveri ali je mail ki ga uporabnik vnese že v uporabi
function preveriMail($con, $mail){
	$query = "select * from uporabnik where email='$mail'";
	$result = mysqli_query($con, $query);

	if($result && mysqli_num_rows($result) == 0){
		return true;
	}
}

//Generira nov user_id ter pregleda, da identicen ze ne obstaja
function novUserId($con){
	$userId = rand(10000, 99999);
	$query = "select * from uporabnik where user_id='$userId'";
	$result = mysqli_query($con, $query);

	if(mysqli_num_rows($result) >= 1){
		novUserId();
	}else{
		return $userId;
	}
}

//Poslje mail s narejeno verifikacijsko kodo
function posliMail($email,$veritificationcode ){
	ini_set("SMTP","ssl:smtp.office365.com" );
	ini_set("smtp_port","587");
	ini_set('sendmail_from', 'pametni.obrazci@outlook.com');

	$to = $email;
	$subject = "Test mail";
	$message = "Hello! This is a simple email message. ".$veritificationcode;
	$from = "pametni.obrazci@outlook.com";
	$headers = "From:" . $from;
	$retval = mail($to,$subject,$message,$headers);

	if( $retval == true ){
	  	return true;
	}else{
		return false;
	}
}

//<<<<< KODA UPORABLJENA PRI REGISTRACIJA.PHP >>>>> 

//<<<<< KODA UPORABLJENA PRI LOGIN.PHP >>>>>

//<<<<< KODA UPORABLJENA PRI LOGIN.PHP >>>>>



function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from uporabnik where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	header("Location: login.php");
	die;

}

function checkAdmin($con){

	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from uporabnik where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			if($user_data["admin"] == 1){
				return true;	
			}
			else{
				return false;
			}
		}
	}

	header("Location: login.php");
	die;
}

function checkVerify($con){

	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from uporabnik where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			if($user_data["potrjen"] == 0){
				return false;	
			}
			else{
				return true;
			}
		}
	}
	die;
}

function pridobiUporabnika($con, $id){

    $query = "select * from uporabnik where id='$id'";
	$result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0){
		$uporabnik = mysqli_fetch_assoc($result);
		return $uporabnik;
	}


	
}




function pridobiUporabnike($con){
	$query = "select * from uporabnik";
	$result = mysqli_query($con, $query);



	echo "<table class='table table-hover'>";
	echo 
	'<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Uporabnisko ime</th>
			<th scope="col">Email</th>
			<th scope="col">Admin</th>
			<th scope="col">Potrjen</th>
		</tr>
	</thead>'; 

	echo '<tbody>';

	while($row = mysqli_fetch_array($result)){   
	echo "<tr><td>" . '<a href="uporabnik.php?id=' . $row["id"] . '">Uredi</a>' . "</td><td>" . $row['uporabnisko_ime'] . "</td><td>" . $row['email'] . "</td><td>" . $row['admin'] . "</td><td>" . $row['potrjen'] . "</td></tr>";  
	}	

	echo '</tbody>';
	echo "</table>"; 

	mysqli_close($con);
}

function genNewDocId($con){
	$docId = rand(1000, 9999);
	
	$query = "select * from dokument where stevilkaDokumenta='$docId'";
	$result = mysqli_query($con, $query);
	if($result && mysqli_num_rows($result) == 0){
		return $docId;
	}else{
		return $docId + 2;
	}
}

function getUserDoc($con, $userId){
	$query = "select * from dokument where tk_uporabnik='$userId'";
	$result = mysqli_query($con, $query);
	

	echo '<form action="" method="post">';
	echo "<table class='table table-hover'>";
	echo 
	'<thead class="thead-dark">
		<tr>
			<th scope="col">Naziv</th>
			<th scope="col">Stevilka dokumenta</th>
			<th scope="col">Cena</th>
			<th scope="col">Briši</th>
		</tr>
	</thead>'; 

	echo '<tbody>';

	while($row = mysqli_fetch_array($result)){   
	echo "<tr>";
		echo "<td>";
			echo $row["naziv"];
		echo "</td>";
		echo "<td>";
			echo $row["stevilkaDokumenta"];
		echo "</td>";
		echo "<td>";
			echo $row["cena"] . " $";
		echo "</td>";
		echo "<td>";
			echo "<button name='delBtn' value='".$row["id"]."'>Briši</button>";
		echo "</td>";
	echo "</tr>";
	}
	echo '</tbody>';
	echo "</table>"; 
	echo "</form>";
}

if(isset($_POST["delBtn"])){
	$documentId = $_POST["delBtn"];
	$query = "delete from dokument where id='$documentId'";
    $results = mysqli_query($con, $query);
    header("Location: datoteke.php");
}

  