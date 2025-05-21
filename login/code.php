<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $email=$_POST['email'];
    $password=$_POST['pass'];
    echo $email;
    echo $password;
    $sql="SELECT * FROM `tbl_reg` WHERE s_email='$email' AND password='$password';";
    $qry=mysqli_query($con,$sql)or die('query error');
    $row=mysqli_fetch_array($qry);
    $num=mysqli_num_rows($qry);
    // echo $row[0];
    // echo $row[1];
    // echo $num;
    if ($num>0)
    {
        if ($row['role']=='admin') 
        {
           
            $_SESSION['name']=$row['s_name'];
            $_SESSION['id']=$row['s_id'];
            $_SESSION['role']=$row['s_role'];
            $_SESSION['photo']=$row['s_photo'];
            $_SESSION['email']=$row['s_email'];
            $id=$_SESSION['id'];
            $sql1="UPDATE `tbl_reg` SET `status` = '1' WHERE `tbl_reg`.`s_id` = $id;";
            $qry=mysqli_query($con,$sql1);
            $_SESSION['status']=$row['status'];
            header('location:../admin/index.php');
        }
        else if ($row['role']=='user')
        {
            $_SESSION['name']=$row['s_name'];
            $_SESSION['id']=$row['s_id'];
            $_SESSION['role']=$row['role'];
            $_SESSION['photo']=$row['s_photo'];
            $_SESSION['email']=$row['s_email'];
            $id=$_SESSION['id'];
            $sql1="UPDATE `tbl_reg` SET `status` = '1' WHERE `tbl_reg`.`s_id` = $id;";
            $qry=mysqli_query($con,$sql1);
            $_SESSION['status']=$row['status'];
            header('location:../user/index.php');
        }   
    }
    else
    {
        echo "<script>alert('Email or Password is wrong!');</script>";
        echo "<script>window.location='login.php';</script>";
    }
?>