<?php
        session_start();  
        include('db.php');
    

	function btn()
    {
        
    global $con;
    if(isset($_POST['btn']) || $_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $link = $_POST['link'];


        if(empty($name) || empty($email) || empty($link))
        {
            echo "<h2> Oops Somthing Went Wrong !...<br/> Please Check your Registration </h2>";
        }
        else
        {
                    
                $query = "select * from gdatabase where link='$link'";
                $result = mysqli_query($con,$query);

                if(mysqli_num_rows($result))
                {
                    echo "<script>Swal.fire({icon: 'error',title: 'Already Registered',text: 'Continue With your Lecture or Make a new link'}).then((result) => { if (result.isConfirmed) { window.history.go(-2); }})</script>";
                }
                else
                    {
                        $sql = "insert into gdatabase(name, email, link) values('$name', '$email', '$link')";
                        $data = mysqli_query($con, $sql);
                        header("location: face/view.php");


                        // if($data)
                        // {
                        //     echo "<script>Swal.fire({icon: 'success',title: 'Sucessfully Registered',text: 'Now you can Continue with your Lecture'}).then((result) => { if (result.isConfirmed) { Swal.fire('$email','Your Attendence Sheet will be soon send to your email .','info')  } })</script>";                            
                        // }
                        // else
                        // {
                        //     echo "<script>Swal.fire({icon: 'error',title: 'Oops Somthing When Wrong',text: 'Try Agin later'}).then((result) => { if (result.isConfirmed) { window.history.go(-2); }})</script>";

                        // }
                    }

                }
            }
            else
            {
                echo "<script>Swal.fire({icon: 'error',title: 'Oops Somthing When Wrong',text: 'Try Agin later'}).then((result) => { if (result.isConfirmed) { window.history.go(-2); }})</script>";
        
            }

    }

        
?>
