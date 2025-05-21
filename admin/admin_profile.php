<?php
        $sql="SELECT * FROM `tbl_reg` WHERE s_id=1;";
        $qry=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($qry);
        echo '<button class="dropdown-btn">
                <img src="../login/form/'.$row['s_photo'].'">
              </button>';
?>