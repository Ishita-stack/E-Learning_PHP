<?php
        session_start();
        $con=mysqli_connect("localhost","root","","online_education")or die('connetion');
        $name=$_SESSION['name'];
        $id=$_SESSION['id'];
        $sql="SELECT * FROM `tbl_reg` WHERE s_id='$id' AND s_name='$name';";
        $qry=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($qry);
        echo '<button class="dropdown-btn">
                <img src="../../login/form/'.$row['s_photo'].'"style="margin-left: -10px;">
              </button>';
?>