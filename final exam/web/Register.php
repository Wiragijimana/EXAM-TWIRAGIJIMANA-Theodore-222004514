<?php
include "menu.php";
?>
<h1>Register</h1>
    <form method="POST" action="">
        <label><strong>Full Name</strong></label><br>
        <input type="text" name="names" placeholder="Enter your Names"><br>
        <label><strong>Email</strong></label><br>
        <input type="email" name="email" placeholder="Enter your Email"><br>
        <label><strong>PHONE NUMBER </strong></label><br>
        <input type="number" name="phone" placeholder="Enter your phone number"><br>
        <label><strong>Type Of Membership</strong></label><br>
        <select name="type">
        	<option>Personal</option>
        	<option>Big Organisation</option>
        	<option>Small Organisation</option>
        </select><br><br>
        <input type="submit" name="send" value="Register">
</form>
</body>

<?php

if (isset($_POST['send'])) {
	$con=mysqli_connect("localhost","root","","cgs");
	$a=$_POST['names'];
	$b=$_POST['email'];
	$c=$_POST['phone'];
	$d=$_POST['type'];
	$sql=mysqli_query($con,"INSERT INTO register VALUES ('','$a','$d','$b','$c')");

	if ($sql) {
		echo "data is Inserted ";
	}
	else{
		echo "Not Inserted";
	}
}
?>

<table border="1">
	<tr>
		<td>ID</td>
		<td>Fullname</td>
		<td>Membership</td>
		<td>Email</td>
		<td>Phone</td>
		<td>Delete & Update</td>
	</tr>

<?php
$con=mysqli_connect("localhost","root","","cgs");
$sql=mysqli_query($con,"SELECT * FROM register");

while ($out=mysqli_fetch_assoc($sql)) {
	echo "<tr><td>".$out['id']."</td>";
	echo "<td>".$out['fullname']."</td>";
	echo "<td>".$out['membership']."</td>";
	echo "<td>".$out['email']."</td>";
	echo "<td>".$out['phone']."</td>";
	echo "<td><a href=delete.php?delete_id=$out[id]>Delete</a></td>";

}
?>