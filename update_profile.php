<?php
    session_start();
    include "connect.php";

    if(isset($_POST['edit']))
    {
        $id = $_SESSION['id'];
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $phone_no = $_SESSION['phone_no'];
        $email_address = $_SESSION['email_address'];
        $address = $_SESSION['address'];
        $city = $_SESSION['city'];
        $state = $_SESSION['state'];
        $zip_code = $_SESSION['zip_code'];

        $select = "select * from profile where id='$id'";
        $sql = mysqli_query($connect,$select);
        $row = mysqli_fetch_assoc($sql);

        $res = $row['id'];
        if($res == $id)
        {
            $update = "update profile set first_name='$first_name', last_name='$last_name', phone_no='$phone_no', email_address='$email_address', address='$address', 
            city='$city', state='$state', $zip_code='$zip_code' ";
            $sql2 = mysqli_query($connect,$update);

            if($sql2)
            {
                /*Successful*/
                header('location:profile.php');
            }
            else
            {
                /*Sorry! Your profile is not updated.!! */
                header('location:edit_profile.php');
            }
        }

    }

    
?>