<?php
    error_reporting(0);
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    if (isset($_POST['submit'])) 
    {
        $course=$_POST['course'];
        $a_title=$_POST['title'];
        $a_file1=$_FILES['file1']['name'];
        $a_file2=$_FILES['file2']['name'];
        $file1_type=$_FILES['file1']['type'];
        $file2_type=$_FILES['file2']['type'];
        $path1="upload/".$_FILES['file1']['name'];
        $path2="upload/".$_FILES['file2']['name'];
        $file_upload=true;
        $msg="";
        if (!($file1_type=='image/jpeg' or $file1_type=='image/png')) {
            $file_upload=false;
            $msg=$msg.'File type must be jpg or png...';
        }
        if (!($file2_type=='application/pdf')) {
            $file_upload=false;
            $msg=$msg.'You must have to upload pdf file...';
        }
        if ($file_upload=true) 
        {
           if (move_uploaded_file($_FILES['file1']['tmp_name'],$path1) and move_uploaded_file($_FILES['file2']['tmp_name'],$path2)) 
            {
                
                $sql1="INSERT INTO `tbl_assignment` (`c_title`, `a_title`, `a_thumbnail`, `a_file`) VALUES ('$course', '$a_title', '$path1', '$path2');";
                $qry=mysqli_query($con,$sql1);
                echo "<script>alert('Data inserted successfully');</script>";
            }
        }
        else
        {
            echo $msg;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css'>
    <link rel="stylesheet" href="pagination/style.css">
    <title>Admin Panel</title>
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon"> 
</head>
<style type="text/css">
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    #div1
    {
        padding: 30px;
        margin-left: 20px;
    }
    #div2
    {
        padding: 30px;
       /* width: 520px;
        height: 300px;*/
        float: right;
        position: relative;
        margin-left: 600px;
        margin-top: -240px;
        margin-bottom: 70px;
    }
    /*.inputfields
    {
        height: 40px;width:400px;padding: 15px;border: 2px solid #006e72;outline: none;border-radius: 3px;
        color: gray;
    }*/
    #div1,#div2 label
    {
        font-size: 20px;
        color: #006e72;
    }
    .submit_btn
    {
        margin-left:550px;
        margin-bottom: 30px;
/*        padding: 15px;*/
        border-radius: 5px;
        border: none;
        outline: none;
        background-color: #006e72;
        color: white;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
    }
       .dropdown-container {
  display: none;
  background-color: #006e72;
  padding-left: 8px;
  font-size: 20px;
  
}
.profile-dropdown {
  display: none;
  background-color: white;
  padding-left: 8px;
  font-size: 17px;
  margin-left: -90px;
  width: 200px;
  height: auto;
  margin-top: 50px;
  box-shadow: 0 4px 8px 0 #006e7236, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 15px;
  border-radius: 5px;
}
.profile-dropdown div a
{
    line-height: 1.9;
}
.dropdown-container a
{
    color: white;
    margin-left: 55px;
/*    border: 2px solid black;*/
    line-height: 10px;
}
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.dropdown-btn {
  padding: 6px 8px 10px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  font-size: 24px;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  margin-left: 30px;
  font-family: "Poppins", sans-serif;
  margin-left: 0px;
  padding-left: 46px;
}
.dropdown-btn:hover
{
    background-color: white;
    color: #006e72;
    width: 100%;
}
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    #selectmenu li
    {
        font-size:20px; 
    }
    .dbtn {
      background-color: #006e72;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      font-family: "Poppins", sans-serif;
      font-size: 24px;
      margin-left: 30px;
      cursor: pointer;
    }

    .cn {
      position: relative;
      display: inline-block;
    }

    .drobtn-cn {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
/*      margin-left: 30px;*/
      width: 300px;
      cursor: pointer;
    }

    .drobtn-cn a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .drobtn-cn a:hover {background-color: #ddd;}

    .cn:hover .drobtn-cn {display: block;}

    .cn:hover .dbtn #{}
    #inner_div1 a
    {
        padding: 10px;
    }

    .autocomplete {
  position: relative;
  display: inline-block;
  margin-left: 0px;
}

input {
  border: 1px solid transparent;
/*  background-color: #f1f1f1;*/
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
/*  background-color: #f1f1f1;*/
  width: 100%;
  border: 2px solid #006e72;
  border-radius: 3px;
  outline: none;
}

input[type=submit] {
  background-color: #006e72;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
#option_id
{
    outline: none;
    border: 2px solid #006e72;
    width: 710px;
    height: 40px;
    color: gray;
    padding: 5px;
    border-radius: 3px;
}
</style>
<body>
    <div class="side-menu">
        <a href="index.php">
        <div class="brand-name">
        <img src="images/logo3.png" height="75%" width="20%" style="margin-left:-5px">
        &nbsp;<p style="font-size: 30px;">Study Squad</p>
        </div>
        </a>
        <br/>
        <?php 
            include('menu.php');
        ?>
    <div class="container">
        <div class="header" style="width:1227px">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="uil uil-search" style="font-size:25px"></i></button>
                </div>
                <div class="user">
                    <!-- <a href="changepass.php" class="btn" style="font-family: 'Poppins', sans-serif;padding:10px;">Change Password</a> -->
                    <div style="margin-left:130px"></div>
                    <img src="images/notifications.png">
                    <div class="img-case">
                        <?php
                        include('admin_profile1.php');
                        ?>
                        <div class="profile-dropdown">
                            <div>
                                <a href="profile_page.php"style="color: #006e72;"><ion-icon name="person-circle-outline"></ion-icon>&nbsp Profile</a><br>
                            </div>
                            <div>
                                <a href="#"style="color: #006e72;"><ion-icon name="lock-closed-outline"></ion-icon>&nbsp Change Password</a><br>
                            </div>
                            <div>
                                <a href="logout.php"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 270px;width: 0px;background: none;">Admin</h3>
                </div>
            </div>
        </div>
         <div class="content">
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-book-open"></i> Add Assignments</h1>
                        
                    </div>
                    <div style="padding-top: 50px;">
                        <div style="width: 750px;height: 350px;margin:auto;padding:20px;border-radius: 10px;">
                            <form action="" method="post" enctype="multipart/form-data">
                              <div>
                                <?php 

                                    $sql="select distinct(c_title) from tbl_course;";
                                    $qry=mysqli_query($con,$sql);
                                    
                                    echo '<select id="option_id" name="course">
                                    <option>-----Select Course-----</option>';
                                    while($row=mysqli_fetch_assoc($qry))
                                    {

                                        echo'<option>'.$row['c_title'].'</option>';
                                        
                                    }
                                    echo '</select>';
                                ?>
                                
                              </div><br>
                              <div>
                                 <input type="text" name="title" placeholder="Assignment title"> 
                              </div><br>
                              <div>
                                  <label for="input-file1" style="cursor: pointer;">
                                  <div style="border: 2px dashed #006e72;width: 350px;height: 110px;text-align: center;padding: 20px;">
                                      <i class="uil uil-file-upload" style="font-size:40px;color: #006e72;"></i>
                                      <p id='txt1' style="color: #006e72;">Click here to Upload Thumbnail </p>
                                  </div>
                                  </label>
                                  <input type="file" accept="image/jpg,image/png" name="file1" id="input-file1" style="display:none;" onchange="abc1();">
                              </div>
                              <div style="margin-top: -110px;float: right;">
                                  <label for="input-file2" style="cursor: pointer;">
                                  <div style="border: 2px dashed #006e72;width: 350px;height: 110px;text-align: center;padding: 20px;">
                                      <i class="uil uil-file-upload" style="font-size:40px;color: #006e72;"></i>
                                      <p id='txt2' style="color: #006e72;">Click here to Upload Document </p>
                                  </div>
                                  </label>
                                  <input type="file" accept="image/jpg,image/png" name="file2" id="input-file2" style="display:none;" onchange="abc2();">
                              </div><br>
                              <script type="text/javascript">
                                    function abc1(){
                                        var d=document.querySelector("#input-file1");
                                         var txt=document.querySelector("#txt1");
                                         txt.innerHTML=d.value;    
                                    }
                                    function abc2(){
                                        var d=document.querySelector("#input-file2");
                                         var txt=document.querySelector("#txt2");
                                         txt.innerHTML=d.value;    
                                    }
                              </script>
                            
                        </div>
                        <div>
                            
                        </div>
                    <div>
                        <input type="submit" name="submit" class="submit_btn">
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["C++","Java","Javascript","C-language","CSS","HTML","Asp.Net","Perl","React","Android","ORACLE"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>


</body>

</html>