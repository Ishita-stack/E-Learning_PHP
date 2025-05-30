const quizData = [
  {
    question: "Which language runs in a web browser?",
    a: "Java",
    b: "C",
    c: "Python",
    d: "JavaScript",
    correct: "d"
  },
  {
    question: "What does CSS stand for?",
    a: "Central Style Sheets",
    b: "Cascading Style Sheets",
    c: "Cascading Simple Sheets",
    d: "Cars SUVs Sailboats",
    correct: "b"
  },
  {
    question: "What does HTML stand for?",
    a: "Hypertext Markup Language",
    b: "Hypertext Markdown Language",
    c: "Hyperloop Machine Language",
    d: "Helicopters Terminals Motorboats Lamborginis",
    correct: "a"
  },
  {
    question: "What year was JavaScript launched?",
    a: "1996",
    b: "1995",
    c: "1994",
    d: "none of the above",
    correct: "b"
  }
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