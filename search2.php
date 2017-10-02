<html>
<head>

 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>PHP User Registration Form</title>
<style>
body{
	
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">

<tr>
<td>Blood Group</td>
<td>
	<select name="bloodgroup">
		 <option value="">Select...</option>
	  	 <option value="A+">A+</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B-">B-</option>
         <option value="AB+">AB+</option>
         <option value="AB-">AB-</option>
         <option value="O+">O+</option>
         <option value="O-">O-</option>
	</select>
</td>
</tr>
<tr>
<td>
 <input type="submit" name="register-user" value="Search" class="btnRegister">
</td>
</tr>
</table>
</form>


<?php
if(!empty($_POST["register-user"])){
	if(!isset($error_message)) {
	if(!isset($_POST["bloodgroup"])) {
	$error_message = " You forgot to select your bloodgroup!";
	}
	}

	if(!isset($error_message)) {
		$blood = $_POST["bloodgroup"];
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$sql = "SELECT  * FROM registered_users WHERE bloodgroup = '".$blood."'";
$result = $db_handle->insertQuery($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table style='border:1px solid red;margin-bottom:50px'>";
            echo "<tr style='padding:20px'>";
                echo "<th style='border:2px solid red;text-align:center;background-color:red;color:white;'>Name</th>";
                echo "<th style='border:2px solid red;text-align:center;padding:20px;background-color:red;color:white;'>Age</th>";
                echo "<th style='border:2px solid red;text-align:center;padding:20px;padding:20px;padding:20px;padding:20px;background-color:red;color:white;'>email</th>";
                echo "<th style='border:2px solid red;text-align:center;padding:20px;padding:20px;padding:20px;background-color:red;color:white;'>Blood Group</th>";
                echo "<th style='border:2px solid red;text-align:center;padding:20px;background-color:red;color:white;'>Location</th>";
                echo "<th style='border:2px solid red;text-align:;padding:20px;background-color:red;color:white;'>Phone No.</th>";
            echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['first_name'] . " ". $row['last_name'] . "</td>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['age'] . "</td>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['email'] . "</td>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['bloodgroup'] . "</td>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['address'] . "</td>";
                echo "<td style='border:1px solid red;text-align:center;padding:20px'>" . $row['phoneno'] . "</td>";
            echo "</tr>";

    }
} else {
    echo "0 results";
}

	}
}

?>
