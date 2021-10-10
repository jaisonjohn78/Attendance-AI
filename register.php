<?php
require 'config/function.php';

btn();
echo "<script>Swal.fire({icon: 'success',title: 'Sucessfully Registered',text: 'Now you can Continue with your Lecture'}).then((result) => { if (result.isConfirmed) { Swal.fire('Check your Email','Your Attendence Sheet will be soon send to your email .','info')  } })</script>";                

  


?>

<!DOCTYPE html>
<html>

<head>
	<title>Redirecting...</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body{

            background-color: rgb(120, 210, 120);
        }
    </style>

</head>

<body>
	<center>
                
		
        <h3>Attendence Sheet</h3>
	</center>
</body>

</html>
