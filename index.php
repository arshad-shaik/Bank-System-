<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ARMS Bank</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Playball&family=Tangerine:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playball&family=Tangerine:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image" href="https://img.icons8.com/color/2x/best_of_both_words.png">
</head>

<!--------------------------------------CSS Styles----------------------------->
<style>
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	background-image: linear-gradient(135deg, rgba(142,45,226,0.6), rgba(74,0,224,0.6)) , url("https://images.unsplash.com/photo-1518458028785-8fbcd101ebb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80");
	height: 100vh;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
.nav{
	display: flex;
	padding: 5px 50px;
	align-items: center;
	justify-content: flex-end;
	background: rgba(0, 0, 0, 1.0);
	position: sticky;
	top: 0;
}

heading{
	margin-right: auto;
	font-family: 'Playball', cursive;
	color: white;
	font-size: 32px;
	text-shadow: 2px 2px 5px black;
	border: 5px solid white;
	padding: 5px 10px;
	border-radius: 10px;
	text-align: center;
}
li{
	display: inline-block;
}

li a{
	text-decoration: none;
	color: white;
	font-family: 'Open Sans', sans-serif;
	margin-left: 70px;
	transition: 0.5s;
	font-size: 18px;
}
li a:hover{
	color: #fbff00;
}
.stmt{
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 10%;
	border:  10px solid yellow;

}
.stmt p{
	display: block;
	color: white;
	font-size: 52px;
	text-align: center;
	font-family: 'Pattaya', sans-serif;
	line-height: 100px;
}
.globe{
	margin-left: 50px;
}

.fleximgs{
	display: flex;
	align-items: center;
	justify-content: safe center;
	text-align: center;
	box-sizing: border-box;
	margin-bottom: 100px;
}

.fas,.far{
	color: white;
	font-size: 30px;
}

.symb{
	display: flex;
	justify-content: space-around;
	align-items: center;
	margin: 200px 0 200px 0;
}
.fa-university{
	font-size: 300px;
	color: lightyellow;
}
.symb p{
	font-size: 100px;
	color: white;
	font-family: 'Stylish', sans-serif;
}

.grid-container1{
	display: grid;
	justify-content: start;
	grid-template-columns: 600px 220px;
	margin-bottom: 200px;
}

.image1{ 
	grid-area: 1 / 2 / 3 / 3;
	display: flex; 
	align-items: center;
	justify-content: center;
	
}

.grid-container1 div{
	background: rgba(0, 0, 0, 0.4);
	
}
.servicesimg{
	height: 100%;
}
.heading{
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: 'Tangerine', cursive;
	font-size: 70px;
	padding: 10px;
	color: yellow;
}
.description{
	font-family: 'Open Sans', sans-serif;
	padding: 10px;
	color: white;
}

.grid-container2{
	display: grid;
	justify-content: end;
	grid-template-columns: 250px 680px;
	margin-bottom: 200px;
}
.image2{
	grid-area: 1 / 1 / 3 / 2;
	display: flex; 
	align-items: center;
	justify-content: center;
}
.securityimg{
	height: 100%;	
	width: 100%;
}

.grid-container2 div{
	background: rgba(0, 0, 0, 0.4);
}

.grid-container3{
	display: grid;
	justify-content: start;
	grid-template-columns: 600px 220px;
	margin-bottom: 200px;
	column-gap: 40px;
}

.image3{ 
	grid-area: 1 / 2 / 3 / 3;
	display: flex; 
	align-items: center;
	justify-content: center;
}

.grid-container3 div{
	background: rgba(0, 0, 0, 0.4);
}

.onlinebankimg{
	height: 100%;	
	width: 140%;
}

.grid-container4{
	display: grid;
	justify-content: end;
	grid-template-columns: 250px 680px;
	margin-bottom: 200px;
}
.image4{
	grid-area: 1 / 1 / 3 / 2;
	display: flex; 
	align-items: center;
	justify-content: center;
}
.loanimg{
	height: 100%;	
	width: 100%;
}

.grid-container4 div{
	background: rgba(0, 0, 0, 0.4);
}


.end{
	background: #303030;
	display: flex;
	justify-content: space-around;
	align-items: center;
	flex-wrap: wrap; 
	padding: 30px 0;

}

.connect{
	box-shadow: 5px 5px 10px black, -5px -5px 10px black;
	background: white;
	padding: 10px 20px;
	color: black;
	font-family: verdana;
	font-size: 18px;
	border-radius: 10px;
	color: black;
	margin-bottom: 200px;
}

.icon{
	display: flex;
	margin-top: 10px;
	font-size: 25px;
	color: black;
	text-align: center;
	line-height: 50px;
}
.ir{
	margin: 10px;
	border-radius: 50px;
	height: 50px;
	width: 50px;
	box-shadow: 1px 1px 5px grey;
	align-items: center;
	transition: 0.6s;
	background: white;
}

.ir:hover{
	transform: scale(1.4);
}

.fa-facebook-f{
	color: blue;
}

.fa-instagram{
	color: #e84393;
}

.fa-youtube{
	color: #e84118;
}

.fa-linkedin-in{
	color: #0097e6;
}

.fa-twitter{
	color: #0097e6;
}

.subs{
	background: white;
	padding: 10px 20px;
	font-family: verdana;
	box-shadow: 5px 5px 10px black, -5px -5px 10px black;
	border-radius: 20px; 
	margin-bottom: 200px;
}

.email_sub{
	width: 100%;
	height: 40px;
	margin-top: 10px;
	border: 2px solid #0097e6;
	outline: none;
	border-radius: 50px;
	padding: 10px 20px;
	font-family: verdana;
	font-size: 16px;
}

.subs > button{
	margin-top: 10px;
	font-family: verdana;
	font-size: 16px;
	background: #33FF66;
	outline: none;
	border: none;
	padding: 10px 20px;
	transition: 0.5s;

}
.subs > button:hover{
	background: #33FF00;
	cursor: pointer;
}

.write{
	background: white;
	box-shadow: 5px 5px 10px black, -5px -5px 10px black;
	margin-top: 10px;
	font-family: verdana;
	font-size: 16px;
	padding: 15px 20px;
	border-radius: 20px;
	margin-bottom: 200px;
}
.call{
	margin-top: 10px;
}
</style>





<!--------------------------------------HTML Code--------------------------------------->



<body>
	<div class="nav">
		<heading>ARMS Bank</heading>
		<ul>
			<li><a href="index.php" class="home">Home</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="#">Transaction History</a></li>
			<li><a href="#about">About us</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</div>

	<div class="stmt">
		<p class="quote">"Taste our best services<br>all over the world"</p>
		<img src="https://images.unsplash.com/flagged/photo-1576045771676-7ac070c1ce72?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDExfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="globe">
	</div>

	<div class="fleximgs">
		<div>
			<img src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2F2aW5nc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
			<i class="fas fa-coins"> Save</i>
		</div>
		<div>
			<img src="https://images.unsplash.com/photo-1560472355-536de3962603?ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
			<i class="fas fa-credit-card"> Cards</i>
		</div>
		<div>
			<img src="https://images.unsplash.com/photo-1534452203293-494d7ddbf7e0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
			<i class="fas fa-cart-plus"> Shop</i>
		</div>
	</div>

	<div class="symb">
		<i class="fas fa-university"></i>
		<p>Be with us - Bank with us</p>
	</div>

	<div id="about">
		<div class="grid-container1">
			<div class="heading">Services</div>
			<div class="description"><p>We provide you the best and the fastest possible services. We always ensure all our customers are sastified with our services. Customer satisfaction will always remain our first priority. We work 24*7 and we are present all over the world so you can get our services at anytime from anywhere. Recently, we brought you the internet banking too, which helps you to operate your account from your home itself.</p>
			</div>
			<div class="image1">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXTVUV6NSwbXGdqYbP2HxdrcEGu-DlY_gV8A&usqp=CAU" class="servicesimg">
			</div>
		</div>

		<div class="grid-container2">
			<div class="image2">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu4_N2byoaayl94kTld9Z6KYUNRVmQ6PHqVA&usqp=CAU" class="securityimg">
			</div>
			<div class="heading">Security</div>
			<div class="description"><p>The ARMS bank vision is also to be the most trusted and lifetime bank of its customers. When customers bank with us, they are not just banking with a strong local bank, they are also banking with a bank that can give them access to the products, services and network of a strong global financial group. ARMS Bankers take great pride in the fact that customers continue to trust the Bank to take care of the security,their business and financial needs and well-being.</p>
			</div>
		</div>

		<div class="grid-container3">
			<div class="heading">Online Banking</div>
			<div class="description"><p>online banking means accessing your bank account and carrying out financial transactions through the internet on your smartphone, tablet or computer. We brought this facility to you for faster services. If you got the online banking facilities you don't need to reach out the bank to perform the banking operations. It is faster, safer and secure.</p>
			</div>
			<div class="image3">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkwOQ5h1gopKKoerJgNzcZZ7s7JvEI9wTenA&usqp=CAU" class="onlinebankimg">
			</div>
		</div>

		<div class="grid-container4">
			<div class="image4">
				<img src="https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/wp-content/uploads/2019/08/gettyimages-1050881944-612x612-e1565718161876.jpg" class="loanimg">
			</div>
			<div class="heading">Loans</div>
			<div class="description"><p>ARMS bank helps you build your future by offering you to get the loan from our bank. We always strive for the goodness of our customers. We provide you the loans with as lesser as possible interest rates. We also give the enough time to return the loan. We made the process dynamic and easier for you.</p>
			</div>
		</div>
	</div>

	<div class="end" id="contact">
	
		<div class="connect">
			<p>Connect us :</p>
			<div class="icon">
			<a href="https://www.facebook.com" class="ir" title="Facebook"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com" class="ir" title="Instagram"><i class="fab fa-instagram" ></i></a>
			<a href="https://www.twitter.com" class="ir" title="Twitter"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com" class="ir" title="YouTube"><i class="fab fa-youtube"></i></a>
			<a href="https://www.linkedin.com" class="ir" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>


		<div class="subs">
			<p>Enter the email to join our family and<br>receive the updates:</p>
			<p class="demo"></p>
			<input type="text" name="sub" placeholder="Email id" class="email_sub" required><br>
			<button onclick="alert('Congo! You have joined ARMS family. You will receive all our notifications and updates');">Join us</button>


		</div>


		<div class="write">
			<p class="a">Write us:</p>
			<a href="mailto:arshad1562001@gmail.com">Write a mail to ARMS Bank</a>
			<p class="call">Call us:</p>
			<a href="tel:+919989779841">9989779841</a>
		</div>
	</div>


</body>
</html>