<?php

// Database connection file
require_once('db_connect.php');

// Select all images from database and display them in HTML <table>.
$query = "SELECT * FROM detected_faces";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
?>

<style>
	body {
		background-color: #f5f5;
	}
	table {
		position: absolute;
		background-color: #ade6d8;
		top:50%;
		left: 50%;
		transform: translate(-50%,-50%);
	}
table, th, td {
  border: 1px solid black;
}
</style>
<script>Swal.fire({icon: 'success',title: 'Sucessfully Registered',text: 'Now you can Continue with your Lecture'}).then((result) => { if (result.isConfirmed) { Swal.fire('Check your Email','Your Attendence Sheet will be soon send to your email .','info')  } })</script>              

<table>
	<tr>
		<th>ID</th>
		<th>Image</th>
		<th>Open Image in New Tab</th>
		<th>Created Time</th>
	</tr>
	<?php
	while($row = $result->fetch_assoc())
	{
	?>
	<tr>
		<td><?=$row['id']?></td>
		<td>
			<img src="<?=$row['image']?>" style="width: 100px;" />
		</td>
		<td>
			<a href="<?=$row['image']?>" target="_blank">Click Here</a>
		</td>
		<td><?=$row['created_time']?></td>
	</tr>
	<?php
	}
	?>
</table>
<?php
}
else
{
  echo "No records found!";
}

?>