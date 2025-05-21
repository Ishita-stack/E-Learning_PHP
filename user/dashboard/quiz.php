<?php
    session_start();
    $con=mysqli_connect("localhost","root","","online_education")or die('connetion error');
    $t_title=$_GET['t_title'];
    // $sql3="";
    // $qry=mysqli_query($con,$sql3);
    $c_title=$_SESSION['course'];
    $_SESSION['t_title']=$t_title;
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
    <title>User Panel</title>
    <link rel = "icon" href = "images/logo3.png" type = "image/x-icon"> 
    <link rel="stylesheet" type="text/css" href="js/style.css">

</head>
<style type="text/css">
    .side-menu a .active
    {
        background-color: white;
        color: #006e72;
    }
    table tr,td
    {
        border: none;
    }
    table tr:hover
    {
        background-color: #006e723d;
        border-color: #006e723d;
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
   .button_manage
    {
        margin-top: -20px;
        margin-left: 670px;
        color: #006e72;
    }
    .test_title
    {
        margin-top: -50px;
        margin-left: 150px;
        font-weight: bolder;
        color: #006e72;
        font-size: 22px;
    }
    .test_img img
    {
        height:15%;
        width:15%;
        border-radius: 5px;
    }
    .alltest
    {
        padding:50px;
        margin-left: 150px;
    }
    .inner_test
    {
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        width: 750px;
        height: 100px;
        border-radius: 5px;
        padding-top: 17px;
    }
.side-menu {
  position: fixed;
  background-color: #006e72;
  width: 30vw;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
.side-menu .brand-name {
    height: 10vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    left: -57px;
    /* margin-right: 54px; */
    color: ghostwhite;
}
</style>
<body>
    <div class="side-menu">
        <a href="index.php">
        <div class="brand-name" style="margin-left:-43px">
        <img src="images/logo3.png" height="73%"width="12%">
        &nbsp;<p style="font-size: 30px;font-family: 'Poppins', sans-serif;font-weight: 500;">Study Squad</p>
        </div>
        </a>
        <br>
       <?php
        include('menu.php');
       ?>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button  type="submit"><i class="uil uil-search" style="font-size:25px"></i></button>
                </div>
                <div class="user">
                                        
                    <div class="img-case" style="margin-left:150px">
                       <button   class="dropdown-btn"  id="noti">
                            <img src="images/notifications.png" style="">
                        </button>

                        <div class="profile-dropdown" class="parent_div" style="width: 380px;font-size: 20px;padding: 2px;margin-left: -200px;scroll-behavior: auto;">
                            <div style="border: 2px solid lightgray;width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div"><a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                            <div style="border: 2px solid lightgray;border-top: 0px; width: 100%;height: 70px;padding:10px;" class="child_div">
                                <a href="#"style="color: #006e72;"><ion-icon name="person-circle-outline" style="margin-bottom: -5px;"></ion-icon>&nbsp; Feedback</a><br>
                            </div>
                        </div>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="img-case" style="margin-right: 30px;">
                       <?php
                            include('user_profile_img.php');
                       ?>
                        <div class="profile-dropdown">
                            <div>
                                <a href="user_profile.php"style="color: #006e72;"><ion-icon name="person-circle-outline"></ion-icon>&nbsp Profile</a><br>
                            </div>
                            <div>
                                <a href="changepass.php"style="color: #006e72;"><ion-icon name="lock-closed-outline"></ion-icon>&nbsp Change Password</a><br>
                            </div>
                            <div>
                                <a href="logout.php"style="color: #006e72;"><ion-icon name="log-out-outline"></ion-icon>&nbsp Logout</a><br>
                            </div>
                        </div>
                    </div>
                    <h3 style="position: fixed;float: right;margin-left: 295px;width: 0px;background: none;">User</h3>
                </div>
            </div>
        </div>
         <div class="content">
            <br><br>
            <div class="content-2" style="margin-bottom: -200px;">
                <div class="recent-payments">
                    <div class="title">
                        <h1 style="color:#006e72;margin: auto;"><i class="uil uil-file-edit-alt"></i> Test-1</h1>
                    </div>
                    <div style="margin-top: 90px;margin-left: 300px;margin-bottom: 90px;">
                        
                        <div class="quiz-container" id="quiz">
                          <div class="quiz-header">
                            <h2 id="question">Question Waiting...</h2>
                            <ul>
                              <li>
                                <input type="radio" name="answer" id="a" class="answer" />
                                <label for="a" id="a_text">Answer Waiting...</label>
                              </li>

                              <li>
                                <input type="radio" name="answer" id="b" class="answer" />
                                <label for="b" id="b_text">Answer Waiting...</label>
                              </li>

                              <li>
                                <input type="radio" name="answer" id="c" class="answer" />
                                <label for="c" id="c_text">Answer Waiting...</label>
                              </li>

                              <li>
                                <input type="radio" name="answer" id="d" class="answer" />
                                <label for="d" id="d_text">Answer Waiting...</label>
                              </li>
                            </ul>
                          </div>
                          <button id="submit">Submit</button>
                        </div>

<!-- =========================
          Watermark
========================= -->
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script  src="pagination/script.js"></script>
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

<script  >
      
const quizData = [


<?php   
$sqlnew="select * from tbl_test where c_title='$c_title' and t_title='$t_title';";
$qrynew=mysqli_query($con,$sqlnew);
while ($rownew=mysqli_fetch_assoc($qrynew)) 
{

  echo '
  {
    question: "'.$rownew['t_que'].'",
     a: "'.$rownew['t_a'].'",
        b: "'.$rownew['t_b'].'",
        c: "'.$rownew['t_c'].'",
        d: "'.$rownew['t_d'].'",
        correct: "'.$rownew['t_ans'].'"
      },
  ';
}
?>
];

const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();

  const currentQuizData = quizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
}

function deselectAnswers() {
  answerEls.forEach((answerEl) => (answerEl.checked = false));
}

function getSelected() {
  let answer;

  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });
  return answer;
}
submitBtn.addEventListener("click", () => {
  const answer = getSelected();
  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }
    currentQuiz++;
    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `
            <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You answered ${score}/${quizData.length} questions correctly</h2>
            <button onclick="location.reload()">Reload</button>
        `;
    }
  }
});

// ===========================
//           Watermark
// ===========================
const DOT_AMOUNT = 40;

const createSVG = (width, height, className, childType, childAttributes) => {
  const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");

  svg.classList.add(className);

  const child = document.createElementNS(
    "http://www.w3.org/2000/svg",
    childType
  );

  svg.setAttributeNS(
    "http://www.w3.org/2000/svg",
    "viewBox",
    `0 0 ${width} ${height}`
  );

  for (const attr in childAttributes) {
    child.setAttribute(attr, childAttributes[attr]);
  }

  svg.appendChild(child);

  return { svg, child };
};

document.querySelectorAll(".generate-button").forEach((button) => {
  const width = button.offsetWidth;
  const height = button.offsetHeight;

  const style = getComputedStyle(button);

  const { svg, child: circle } = createSVG(width, height, "dots", "circle", {
    cx: "0",
    cy: "0",
    r: "0"
  });

  const strokeGroup = document.createElement("div");
  strokeGroup.classList.add("stroke");

  const { svg: stroke } = createSVG(width, height, "stroke-line", "rect", {
    x: "0",
    y: "0",
    width: "100%",
    height: "100%",
    rx: parseInt(style.borderRadius, 10),
    ry: parseInt(style.borderRadius, 10),
    pathLength: "10"
  });

  button.appendChild(svg);

  strokeGroup.appendChild(stroke);
  strokeGroup.appendChild(stroke.cloneNode(true));

  button.appendChild(strokeGroup);

  const timeline = gsap.timeline({ paused: true });

  for (var i = 0; i < DOT_AMOUNT; i++) {
    var p = circle.cloneNode(true);
    svg.appendChild(p);

    gsap.set(p, {
      attr: {
        cx: gsap.utils.random(width * 0.25, width * 0.75),
        cy: gsap.utils.random(height * 0.5, height * 0.5),
        r: 0
      }
    });

    var durationRandom = gsap.utils.random(10, 12);

    var tl = gsap.timeline();

    tl.to(
      p,
      {
        duration: durationRandom,
        rotation: i % 2 === 0 ? 350 : -420,
        attr: {
          r: gsap.utils.random(0.75, 1.5),
          cy: -width * gsap.utils.random(1.25, 1.75)
        },
        physics2D: {
          angle: -90,
          gravity: gsap.utils.random(-4, -8),
          velocity: gsap.utils.random(10, 25)
        }
      },
      "-=" + durationRandom / 2
    ).to(
      p,
      {
        duration: durationRandom / 3,
        attr: {
          r: 0
        }
      },
      "-=" + durationRandom / 4
    );

    timeline.add(tl, i / 3);
  }

  svg.removeChild(circle);

  const finalTimeline = gsap.to(timeline, {
    duration: 10,
    repeat: -1,
    time: timeline.duration(),
    paused: true
  });

  const stars = gsap.to(button, {
    repeat: -1,
    repeatDelay: 0.75,
    paused: true,
    keyframes: [
      {
        "--generate-button-star-2-scale": ".5",
        "--generate-button-star-2-opacity": ".25",
        "--generate-button-star-3-scale": "1.25",
        "--generate-button-star-3-opacity": "1",
        duration: 0.3
      },
      {
        "--generate-button-star-1-scale": "1.5",
        "--generate-button-star-1-opacity": ".5",
        "--generate-button-star-2-scale": ".5",
        "--generate-button-star-3-scale": "1",
        "--generate-button-star-3-opacity": ".5",
        duration: 0.3
      },
      {
        "--generate-button-star-1-scale": "1",
        "--generate-button-star-1-opacity": ".25",
        "--generate-button-star-2-scale": "1.15",
        "--generate-button-star-2-opacity": "1",
        duration: 0.3
      },
      {
        "--generate-button-star-2-scale": "1",
        duration: 0.35
      }
    ]
  });

  button.addEventListener("pointerenter", () => {
    gsap.to(button, {
      "--generate-button-dots-opacity": "1",
      duration: 0.5,
      onStart: () => {
        finalTimeline.restart().play();
        setTimeout(() => stars.restart().play(), 500);
      }
    });
  });

  button.addEventListener("pointerleave", () => {
    gsap.to(button, {
      "--generate-button-dots-opacity": "0",
      "--generate-button-star-1-opacity": ".25",
      "--generate-button-star-1-scale": "1",
      "--generate-button-star-2-opacity": "1",
      "--generate-button-star-2-scale": "1",
      "--generate-button-star-3-opacity": ".5",
      "--generate-button-star-3-scale": "1",
      duration: 0.15,
      onComplete: () => {
        finalTimeline.pause();
        stars.pause();
      }
    });
  });
});
  </script>
</body>

</html>