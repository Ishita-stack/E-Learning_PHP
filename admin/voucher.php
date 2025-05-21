<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - PayPal - Receipt</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="vaoucher/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Built from referencing Vladyslav Tyzun's Dribbble shot: https://dribbble.com/shots/2738907-PayPal-Email-Receipt -->

<link href='https://fonts.googleapis.com/css?family=Raleway:600,400' rel='stylesheet' type='text/css'>

<div class="receipt">
	
	<header class="header">
		<div class="header__top">
			<div class="header__logo">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.58 30.18"><defs><style>.a{fill:#253b80;}.b{fill:#179bd7;}.c{fill:#222d65;}</style></defs><title>PayPal</title><path class="a" d="M7.27,29.15l0.52-3.32-1.16,0H1.06L4.93,1.29A0.32,0.32,0,0,1,5,1.1,0.32,0.32,0,0,1,5.24,1h9.38C17.73,1,19.88,1.67,21,3a4.39,4.39,0,0,1,1,1.92,6.92,6.92,0,0,1,0,2.64V8.27l0.53,0.3a3.69,3.69,0,0,1,1.07.81,3.78,3.78,0,0,1,.86,1.94,8.2,8.2,0,0,1-.12,2.81,9.9,9.9,0,0,1-1.15,3.18,6.55,6.55,0,0,1-1.83,2,7.4,7.4,0,0,1-2.46,1.11,12.26,12.26,0,0,1-3.07.35H15.12a2.2,2.2,0,0,0-2.17,1.85l-0.06.3L12,28.78l0,0.22a0.18,0.18,0,0,1-.06.13,0.15,0.15,0,0,1-.1,0H7.27Z"/><path class="b" d="M23,7.67h0q0,0.27-.1.55c-1.24,6.35-5.47,8.55-10.87,8.55H9.33A1.34,1.34,0,0,0,8,17.89H8L6.6,26.83,6.2,29.36a0.7,0.7,0,0,0,.7.81h4.88a1.17,1.17,0,0,0,1.16-1l0-.25,0.92-5.83L14,22.79a1.17,1.17,0,0,1,1.16-1h0.73c4.73,0,8.43-1.92,9.51-7.48,0.45-2.32.22-4.26-1-5.62A4.67,4.67,0,0,0,23,7.67Z"/><path class="c" d="M21.75,7.15L21.17,7l-0.62-.12a15.28,15.28,0,0,0-2.43-.18H10.77a1.17,1.17,0,0,0-1.16,1L8,17.6l0,0.29a1.34,1.34,0,0,1,1.32-1.13h2.75c5.4,0,9.64-2.19,10.87-8.55C23,8,23,7.85,23,7.67a6.59,6.59,0,0,0-1-.43Z"/><path class="a" d="M9.61,7.7a1.17,1.17,0,0,1,1.16-1h7.35a15.28,15.28,0,0,1,2.43.18L21.17,7l0.58,0.15L22,7.24a6.69,6.69,0,0,1,1,.43c0.37-2.35,0-3.94-1.27-5.39S17.85,0,14.62,0H5.24A1.34,1.34,0,0,0,3.92,1.13L0,25.9a0.81,0.81,0,0,0,.8.93H6.6L8,17.6Z"/></svg>
			</div>
			<div class="header__meta">
				<span class="header__date">25.04.2016</span>
				<span class="header__serial">0f-113</span>
				<span class="header__number">25042016</span>
			</div>
		</div>
		<div class="header__greeting">
			<span class="header__name">Hi, User</span>
			<span class="header__count">You've purchased this course</span>
			<span class="header__border"></span>
		</div>
		<div class="header__spacing"></div>
	</header>
	
	<section class="cart">
			<h2 class="cart__header">Receipt:</h2>
			<ol class="list">
				<li class="list__item">
					<span class="list__name">Javascript</span>
					<span class="list__price">₹600.00</span>
				</li>
				<!-- <li class="list__item">
					<span class="list__name">Nike sweatpants</span>
					<span class="list__price">$125.00</span>
				</li>
				<li class="list__item">
					<span class="list__name">Converse All-Stars</span>
					<span class="list__price">$95.00</span>
				</li> -->
			</ol>	
			<hr class="cart__hr" />
			<footer class="cart__total">
				<h3 class="cart__total-label">Total</h3>
				<span class="cart__total-price">₹600.00</span>				
			</footer>
	</section>
	
	<!-- <footer class="bar-code">
		<div class="bar-code__code">
			<img src="images/logo3.png" height="75%" width="20%" style="margin-left:-5px">
        &nbsp;<p style="font-size: 30px;">Study Squad</p>
		</div>
	</footer> -->
	
</div>

<!-- <a href="https://dribbble.com/shots/2738907-PayPal-Email-Receipt" target="_blank" class="link">Built from reference: Vladyslav Tyzun's Dribbble shot, completed for Awesomed</a> -->

<button class="button" type="button" onclick="restart()">Replay</button>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/TweenMax.min.js'></script><script  src="vaoucher/script.js"></script>

</body>
</html>
