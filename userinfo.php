<?php 
    $con=mysqli_connect('localhost','root','',"greenleaf",3307);
    
    if($con)
    {
        echo "Connection established successfully!";
    }
    else
    {
        echo "Connection not established!";
    }

    mysqli_select_db($con,'greenleaf');
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments=$_POST['comments'];

    $query= "insert into contactus (user,email,mobile,comment) values ('$user', '$email', '$mobile', '$comments')";
    $querypush = mysqli_query($con, $query);

    /*if($querypush)     #if not eshtablished
    {
        echo '<script> alert("Comment is sent to our database!"); </script>';
    }
    else
    {
        echo '<script> alert("ERROR!"); </script>';
    }*/
    #mysqli_query($con, $query);
    header('location:contact.php');
?>